<?php

namespace common\models\base;

use Yii;
use Faker\Provider\Uuid;

/**
 * This is the model class for table "base_category".
 *
 * @property string $id
 * @property string $name
 * @property int $enabled
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'base_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['enabled'], 'integer'],
            [['id'], 'string', 'max' => 36],
            [['name'], 'string', 'max' => 255],
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
        $this->enabled = 1;
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
     * Evita que el modelo sea borrado
     */
    public function delete()
    {
        $this->enabled = 0;
        $this->save();
    }



    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nombre',
            'enabled' => 'Habilitado',
        ];
    }
}
