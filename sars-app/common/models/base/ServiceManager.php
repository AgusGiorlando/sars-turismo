<?php

namespace common\models\base;

use Yii;
use common\models\base\Service;
use common\models\base\ServiceImage;
use Faker\Provider\Uuid;
use yii\helpers\ArrayHelper;
use yii\helpers\StringHelper;

class ServiceManager
{
    public static function findAllServices($only_enabled = true)
    {
        try {
            $aServices = [];

            $where = [];

            if ($only_enabled == true) {
                $where['enabled'] = true;
            }

            $aObjectServices = Service::findAll($where);

            foreach ($aObjectServices as $oService) {
                $oImage = ServiceManager::getCoverImage($oService);

                if (empty($oImage) == true) {
                    continue;
                }

                $aService = [
                    'service' => $oService,
                    'cover_filename' => $oImage->filename
                ];

                array_push($aServices, $aService);
            }

            return $aServices;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public static function findService($service_id, $only_enabled = true)
    {
        try {
            $where = [
                'id' => $service_id
            ];

            if ($only_enabled == true) {
                $where['enabled'] = true;
            }

            return Service::find($where)->all();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public static function createService($oNewService)
    {
        try {
            // Validacion del objeto
            if ($oNewService->validate() == false) {
                throw new \Exception(implode(". ", $oNewService->getErrorSummary(true)));
            }

            // Genera el id
            $oNewService->id = Uuid::uuid();
            Yii::$app->session->setFlash('info', 'Service ID: ' . $oNewService->id);

            // Formatea arrays
            $oNewService->observations = self::__StringGroupToJSON($oNewService->observations);
            $oNewService->includes = self::__StringGroupToJSON($oNewService->includes);
            $oNewService->not_includes = self::__StringGroupToJSON($oNewService->not_includes);

            // Guarda el objeto
            $oNewService->save();
            if ($oNewService->hasErrors() == true) :
                throw new \Exception(implode(". ", $oNewService->getErrorSummary(true)));
            endif;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    private static function __StringGroupToJSON($string)
    {
        return json_encode(StringHelper::explode($string, ';', true, true));
    }

    public static function getImages($oService)
    {
        $aServiceImages = ServiceImage::findAll(['service_id' => $oService->id]);
        $aImageIds = ArrayHelper::getColumn($aServiceImages, 'image_id');
        return Image::findAll(['id' => $aImageIds]);
    }

    public static function getCoverImage($oService)
    {
        $oServiceImage = ServiceImage::findOne(['service_id' => $oService->id]);
        if (empty($oServiceImage) == false) {
            return Image::findOne(['id' => $oServiceImage->image_id]);
        }

        return null;
    }

    public static function uploadImages($aImages, $folderPath, $service_id, $is_cover = false)
    {
        try {
            // Crea la carpeta si no existe
            if (file_exists($folderPath) == false) {
                mkdir($folderPath, 0775, true);
            }

            foreach ($aImages as $name) {
                // Ruta en el server
                $oNewImage = new Image();
                    
                $strBaseName = $name->basename;
                if ($is_cover == true) {
                    $strBaseName = 'cover';
                }

                $path =  $folderPath . '/' . $strBaseName . '.' . $name->extension;

                if ($name->saveAs($path)) {
                    // Guarda la imagen
                    $oNewImage = new Image();
                    
                    $strBaseName = $name->basename;
                    if ($is_cover == true) {
                        $strBaseName = 'cover';
                    }

                    $oNewImage->filename = $strBaseName . '.' . $name->extension;
                    $oNewImage->filepath = $path;

                    $oNewImage->save();
                    if ($oNewImage->hasErrors() == true) :
                        throw new \Exception(implode(". ", $oNewImage->getErrorSummary(true)));
                    endif;

                    // Guarda la relacion con servicio
                    $oNewRelation = new ServiceImage();
                    $oNewRelation->service_id = $service_id;
                    $oNewRelation->image_id = $oNewImage->id;

                    $oNewRelation->save();
                    if ($oNewRelation->hasErrors() == true) :
                        throw new \Exception(implode(". ", $oNewRelation->getErrorSummary(true)));
                    endif;
                }
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
