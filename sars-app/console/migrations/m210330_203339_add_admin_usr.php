<?php

use Faker\Provider\Uuid;
use yii\db\Migration;

/**
 * Class m210330_203339_add_admin_usr
 */
class m210330_203339_add_admin_usr extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', [
            'id' => Uuid::uuid(),
            'username' => 'admin',
            'auth_key' => '000',
            'password_hash' => Yii::$app->getSecurity()->generatePasswordHash('admin123'),
            'email' => 'admin@sarsturismo.com,ar',
            'status' => 10,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
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
        echo "m210330_203339_add_admin_usr cannot be reverted.\n";

        return false;
    }
    */
}
