<?php
namespace common\models\base;

use common\models\base\Service;

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
}
?>