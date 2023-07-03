<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "base_combo".
 *
 * @property string $id
 * @property int|null $enabled
 * @property int|null $version
 * @property string $name
 * @property float $price
 * @property string|null $service_ids
 */
class Combo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'base_combo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'price'], 'required'],
            [['enabled', 'version'], 'integer'],
            [['price'], 'number'],
            [['service_ids'], 'safe'],
            [['id'], 'string', 'max' => 36],
            [['name'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'enabled' => 'Enabled',
            'version' => 'Version',
            'name' => 'Name',
            'price' => 'Price',
            'service_ids' => 'Service Ids',
        ];
    }
}
