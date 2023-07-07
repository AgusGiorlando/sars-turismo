<?php

namespace common\models\base;

use Yii;
use common\models\base\ServiceManager;
use common\models\base\Combo;

class ComboManager
{
    public static function findComboById($combo_id, $only_enabled = true)
    {
        try {
            $where = [
                'id' => $combo_id
            ];

            if ($only_enabled == true) {
                $where['enabled'] = true;
            }

            return Combo::find()->where($where)->one();
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

    public static function getAllServices($oCombo)
    {
        try {
            // $aServiceIds = json_decode($oCombo->service_ids);
            $aServices = ServiceManager::findService($oCombo->service_ids);
            return $aServices;
        } catch (\Exception $ex) {
            throw $ex;
        }
    }
}
