<?php

use yii\db\Migration;

/**
 * Class m210316_233602_add_services_table
 */
class m210316_233602_add_services_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('base_service', [
            'id' => $this->char(36)->notNull(),
            'enabled' => $this->boolean()->defaultValue(1),
            'version' => $this->tinyInteger(2)->defaultValue(0),
            'name' => $this->string()->notNull(),
            'price' => $this->double()->notNull(),
            'images' => $this->json(),
            'description' => $this->text(),
            'observations' => $this->text(),
            'includes' => $this->json(),
            'duration' => $this->time()->defaultValue(0),
            'languages' => $this->text(),
            'type' => $this->string(),
        ]);

        $this->addPrimaryKey('PK_service', 'base_service', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropPrimaryKey('PK_service', 'base_service');
        $this->dropTable('base_service');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210316_233602_add_services_table cannot be reverted.\n";

        return false;
    }
    */
}
