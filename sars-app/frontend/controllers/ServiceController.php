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
            throw $th;
        }
    }

    public function actionView($id)
    {
        try {
            $oService = ServiceManager::findService($id);
            $aObjectImages = ServiceManager::getImages($oService);
            

            
            $aImages = [];

            for ($index = 0; $index < count($aObjectImages); $index++) {
                $aImages[$index] = [
                    'src' => '/img/services/' . $oService->id . '/' . $aObjectImages[$index]->filename,
                    'title' => 'Imagen ' . $index,
                ];
            }

            return $this->render('view', [
                'oService' => $oService,
                'images' => $aImages
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
