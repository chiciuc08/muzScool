<?php

namespace frontend\controllers;

use Yii;
use app\models\Ora;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Grupaelevi;


/**
 * OraController implements the CRUD actions for Ora model.
 */
class OraController extends Controller
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
     * Lists all Ora models.
     * @return mixed
     */
    public function actionIndex()
    {
        $listaClaseActive = Grupaelevi::find()->all();
        $dataProvider = new ActiveDataProvider([
            'query' => Ora::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'listaClaseActive'=>$listaClaseActive,
        ]);
    }
    
    public function actionOrar($idGrupa){
        $grupa = Grupaelevi::findOne(['grupa_elevi_id'=>$idGrupa]);
        $dataProvider = new ActiveDataProvider([
            'query' => Ora::find()->innerJoin('elev_grupaelevi', 'elev_grupaelevi.elev_id = info_orascolara.ora_idelev')->
                where('elev_grupaelevi.grupaelev_id = :idGrupa',['idGrupa'=>$idGrupa])->groupBy('ora_data'),
        ]);
        return $this->render('orar',[
            'grupa'=>$grupa,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ora model.
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
     * Creates a new Ora model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ora();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ora_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ora model.
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
     * Deletes an existing Ora model.
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
     * Finds the Ora model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ora the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ora::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
