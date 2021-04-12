<?php

use yii\db\Migration;

/**
 * Class m210406_225805_add_img_support
 */
class m210406_225805_add_img_support extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('base_image',[
            'id' => $this->char(36)->notNull(),
            'filename' => $this->string()->notNull(),
            'filepath' => $this->string()->notNull()
        ]);
        
        $this->addPrimaryKey('PK_image', 'base_image', 'id');

        $this->createTable('base_service_image', [
            'service_id' => $this->char(36)->notNull(),
            'image_id' => $this->char(36)->notNull(),
        ]);

        $this->addForeignKey('FK_service_image_s', 'base_service_image', 'service_id', 'base_service', 'id');
        $this->addForeignKey('FK_service_image_i', 'base_service_image', 'image_id', 'base_image', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropPrimaryKey('PK_image', 'base_image');
        $this->dropTable('base_image');
        
        $this->dropForeignKey('FK_service_image_i', 'base_service_image');
        $this->dropForeignKey('FK_service_image_s', 'base_service_image');
        $this->dropTable('base_service_image');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210406_225805_add_img_support cannot be reverted.\n";

        return false;
    }
    */
}
