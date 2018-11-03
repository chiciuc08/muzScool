<?php

namespace frontend\controllers;

use Yii;
use app\models\nota;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Grupaelevi;
use common\models\User;

/**
 * NotaController implements the CRUD actions for nota model.
 */
class NotaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all nota models.
     * @return mixed
     */
    public function actionIndex()
    {
        $listaClaseActive = Grupaelevi::find()->all();
        $dataProvider = new ActiveDataProvider([
            'query' => nota::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'listaClaseActive'=>$listaClaseActive,
        ]);
    }
    
    public function actionNote($idClasa)
    {
        $elevi = User::find()->select(['users_nume','users_prenume'])->innerJoin('elev_grupaelevi', 'users.id = elev_grupaelevi.Elev_id')->where(['elev_grupaelevi.grupaelev_id' =>$idClasa])->all();
        $oraScolara = nota::find()->select(['ora_data'])->innerJoin('elev_grupaelevi', 'elev_grupaelevi.elev_id = ora_idelev')->where(['elev_grupaelevi.grupaelev_id' =>$idClasa])->distinct()->all();
        $noteSql = nota::find()->select(['ora_data','nota','ora_idElev'])->innerJoin('elev_grupaelevi', 'elev_grupaelevi.elev_id = ora_idelev')->where(['elev_grupaelevi.grupaelev_id' =>$idClasa])->distinct()->all();
        $listaNote = array();
        foreach ($noteSql as $nota) {
            $listaNote[$nota->ora_idElev][$nota->ora_data] = $nota->nota;
        }
        return $this->render('note', [
            'elevi'=>$elevi,
            'oraScolara'=>$oraScolara,
            'listaNote'=>$listaNote,
        ]);
    }

    /**
     * Displays a single nota model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new nota model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new nota();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ora_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing nota model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ora_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing nota model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the nota model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return nota the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = nota::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
