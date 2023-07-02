<?php

use yii\db\Migration;

/**
 * Class m210809_181820_alter_base_service
 */
class m210809_181820_alter_base_service extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // ALTERS
        $this->alterColumn('base_service', 'includes', $this->char(255));
        $this->alterColumn('base_service', 'type', $this->char(36));
        
        // DROPS
        $this->dropColumn('base_service', 'languages');
        $this->dropColumn('base_service', 'duration');

        // ADDS
        $this->addColumn('base_service', 'not_includes', $this->char(255));
        $this->addColumn('base_service', 'start', $this->char(255));
        $this->addColumn('base_service', 'return', $this->char(255));
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
        echo "m210809_181820_alter_base_service cannot be reverted.\n";

        return false;
    }
    */
}
