<?php

namespace common\models\base;

use Faker\Provider\Uuid;
use Yii;

/**
 * This is the model class for table "base_services".
 *
 * @property int $id
 * @property int|null $enabled
 * @property int|null $version
 * @property string $name
 * @property float $price
 * @property string|null $images
 * @property string|null $description
 * @property string|null $observations
 * @property string|null $includes
 * @property string|null $type
 * @property string|null $not_includes
 * @property string|null $start
 * @property string|null $return
 
 * @property Category $category
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'base_service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['enabled', 'version'], 'integer'],
            [['name', 'price'], 'required'],
            [['price'], 'number'],
            [['images'], 'safe'],
            [['description', 'observations', 'includes', 'not_includes', 'start', 'return'], 'string'],
            [['type'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['type' => 'id']],
            [['name', 'type'], 'string', 'max' => 255],
        ];
    }

    /**
     * Inicializa un modelo con valores basicos
     */
    public function init()
    {
        parent::init();
        $this->id = "1";
        $this->version = 0;
        $this->enabled = 1;
        $this->price = 0.00;
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
            'enabled' => 'Habilitado',
            'version' => 'Version',
            'name' => 'Nombre',
            'price' => 'Precio',
            'images' => 'Imagenes',
            'description' => 'Descripcion',
            'observations' => 'Observaciones',
            'includes' => 'Incluye',
            'languages' => 'Idiomas',
            'type' => 'Tipo de actividad',
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'type']);
    }
}
