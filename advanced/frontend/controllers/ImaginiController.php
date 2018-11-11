<?php

namespace frontend\controllers;

use Yii;
use app\models\Imagini;
use app\models\UploadForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
/**
 * ImaginiController implements the CRUD actions for Imagini model.
 */
class ImaginiController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create'],
                'rules' => [
                    [
                        'actions' => ['create'],
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
     * Lists all Imagini models.
     * @return mixed
     */
    public function actionIndex()
    {
        $listaImagini = Imagini::find()->orderBy("updated_at desc")->all();

        return $this->render('index', [
            'listaImagini' => $listaImagini,
        ]);
    }

     /**
     * Creates a new Imagini model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                $modelImagine = new Imagini();
                $modelImagine->imagini_nume = $model->imageFile->name;
                $modelImagine->flPublic = 0;
                $modelImagine->createdBy = (string)Yii::$app->user->identity->id;
                $modelImagine->updatedBy =(string) Yii::$app->user->identity->id;
                $modelImagine->created_at = date('Y-m-d H:i:s');
                $modelImagine->updated_at = date('Y-m-d H:i:s');
                if($modelImagine->save()){
                 return $this->actionIndex();
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    
    /**
     * Deletes an existing Imagini model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $imagine_nume)
    {
        $this->findModel($id)->delete();
        
        unlink(Yii::$app->basePath . '/web/imagini/' . $imagine_nume);

        return $this->redirect(['index']);
    }

    /**
     * Finds the Imagini model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Imagini the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Imagini::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
