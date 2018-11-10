<?php

namespace frontend\controllers;

use Yii;
use app\models\Noutati;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


/**
 * NoutatiController implements the CRUD actions for Noutati model.
 */
class NoutatiController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
     return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create','update'],
                'rules' => [
                    [
                        'actions' => ['create','update'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Noutati models.
     * @return mixed
     */
    public function actionIndex()
    {
  
        $noutati = Noutati::find()->orderBy("data_update desc")->all();

        return $this->render('index', [
            'noutati' => $noutati,
        ]);
    }

    /**
     * Displays a single Noutati model.
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
     * Creates a new Noutati model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Noutati();
        $model->createdBy = (string)Yii::$app->user->identity->id;
        $model->id_user_update =(string) Yii::$app->user->identity->id;
        $model->data_insert = date('Y-m-d H:i:s');
        $model->data_update = date('Y-m-d H:i:s');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->noutati_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Noutati model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->data_update = date('Y-m-d H:i:s');
        $model->id_user_update = Yii::$app->user->identity->username;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->noutati_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Noutati model.
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
     * Finds the Noutati model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Noutati the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Noutati::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
