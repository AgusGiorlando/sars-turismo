<?php

use yii\db\Migration;

/**
 * Class m210809_184526_add_base_category_table
 */
class m210809_184526_add_base_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('base_category',[
            'id' => $this->char(36)->notNull(),
            'name' => $this->char(255)->notNull(),
            'enabled' => $this->boolean()->notNull()->defaultValue(true)
        ]);

        $this->addPrimaryKey('PK_category', 'base_category', 'id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210809_184526_add_base_category_table cannot be reverted.\n";

        return false;
    }
    */
}
