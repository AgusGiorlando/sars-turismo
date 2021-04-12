<?php

namespace common\models\base;

use Yii;
use Faker\Provider\Uuid;

/**
 * This is the model class for table "base_image".
 *
 * @property string $id
 * @property string $filename
 * @property string $filepath
 *
 * @property BaseServiceImage[] $baseServiceImages
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'base_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'filename'], 'required'],
            [['filename'], 'file', 'maxFiles' => 10],
            [['id'], 'string', 'max' => 36],
            [['filepath'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

  /**
     * Inicializa un modelo con valores basicos
     */
    public function init()
    {
        parent::init();
        $this->id = "1";
    }

    /**
     * Asigna el UUID antes de guardar por primera vez el modelo
     * @param type $insert
     * @return boolean
     */
    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        if ($insert) {
            $this->id = Uuid::uuid();
        } else {
            $this->version++;
        }

        // ...custom code here...
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'filename' => 'Filename',
            'filepath' => 'Filepath',
        ];
    }

    /**
     * Gets query for [[BaseServiceImages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBaseServiceImages()
    {
        return $this->hasMany(ServiceImage::className(), ['image_id' => 'id']);
    }
}
