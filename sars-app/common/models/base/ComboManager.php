<?php

namespace common\models\base;

use Yii;
use common\models\base\Service;
use common\models\base\ServiceManager;
use common\models\base\Combo;
use yii\helpers\ArrayHelper;
use yii\helpers\StringHelper;

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

            return Combo::findOne($where);
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

    public static function getAllServices($oCombo)
    {
        try {
            $aServices = ServiceManager::findService($oCombo->service_ids);
            return $aServices;
        } catch (\Exception $ex) {
            throw $ex;
        }
    }
}
