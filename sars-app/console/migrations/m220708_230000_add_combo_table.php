<?php

use yii\db\Migration;

/**
 * Class m220708_230000_add_combo_table
 */
class m220708_230000_add_combo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('base_combo',[
            'id' => $this->char(36)->notNull(),
            'enabled' => $this->boolean()->defaultValue(1),
            'version' => $this->tinyInteger(2)->defaultValue(0),
            'name' => $this->string()->notNull(),
            'price' => $this->double()->notNull(),
            'service_ids' => $this->json()
        ]);

        $this->addPrimaryKey('PK_combo', 'base_combo', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropPrimaryKey('PK_combo','base_combo');
        $this->dropTable('base_combo');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220708_230000_add_combo_table cannot be reverted.\n";

        return false;
    }
    */
}