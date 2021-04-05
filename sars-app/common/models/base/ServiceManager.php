<?php
namespace common\models\base;

use Yii;
use common\models\base\Service;
use Faker\Provider\Uuid;

class ServiceManager {
    public static function findAllServices($only_enabled = true){
        try {
            $where = [];
            
            if ($only_enabled == true) {
                $where['enabled'] = true;
            }
                        
            return Service::findAll($where);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public static function findService($service_id, $only_enabled = true) {
        try {
            $where = [
                'id' => $service_id
            ];

            if ($only_enabled == true) {
                $where['enabled'] = true;
            }

            return Service::findOne($where);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public static function createService($oNewService) {
        try {
            // Validacion del objeto
            if ($oNewService->validate() == false) {
				throw new \Exception(implode(". ", $oNewService->getErrorSummary(true)));
			}

            // Genera el id
            $oNewService->id = Uuid::uuid();
            Yii::$app->session->setFlash('info', 'Service ID: ' . $oNewService->id);

            // Json encodes
            $oNewService->images = json_encode($oNewService->images);
            $oNewService->includes = json_encode($oNewService->includes);
            
            // Guarda el objeto
            $oNewService->save();
            if ($oNewService->hasErrors() == true) :
                throw new \Exception(implode(". ", $oNewService->getErrorSummary(true)));
            endif;	

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
?>