<?php

namespace frontend\controllers;

use common\models\base\ServiceManager;

class ServiceController extends \yii\web\Controller
{
    public function actionIndex()
    {
        try {
            $aServices = ServiceManager::findAllServices();
            return $this->render('index',[
                'aServices' => $aServices
            ]);

        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function actionView($id)
    {
        try {
            $oService = ServiceManager::findService($id);
            return $this->render('view', [
                'oService' => $oService
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
