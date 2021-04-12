<?php

namespace backend\controllers;

use common\models\base\Image;
use Yii;
use common\models\base\Service;
use common\models\base\ServiceManager;
use common\widgets\Alert;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * ServiceController implements the CRUD actions for Service model.
 */
class ServiceController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Service models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Service::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Service model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $aImages = ServiceManager::getImages($model);

        return $this->render('view', [
            'model' => $model,
            'images' => $aImages
        ]);
    }

    public function actionUpload($id)
    {

        $oImage = new Image();
        $post = Yii::$app->request->post();
        try {
            if ($oImage->load($post)) {
                if ($oImage->validate()) {
                    $aImages = UploadedFile::getInstances($oImage, 'filename');

                    $folderPath = Yii::getAlias('@web/') . 'img/' . $id;

                    ServiceManager::uploadImages($aImages, $folderPath, $id);

                    return $this->redirect(['view', 'id' => $id]);
                }
            }
            if ($oImage->hasErrors() == true) :
                throw new \Exception(implode(". ", $oImage->getErrorSummary(true)));
            endif;

            return $this->render('upload-images', ['model' => $oImage]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Creates a new Service model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Service();

        try {
            if ($model->load(Yii::$app->request->post())) {

                ServiceManager::createService($model);

                return $this->redirect(['view', 'id' => $model->id]);
            }
        } catch (\Throwable $th) {
            Yii::$app->session->setFlash('error', $th->getMessage());
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Service model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Service model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Service model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Service the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Service::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
