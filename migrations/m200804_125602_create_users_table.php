<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m200804_125602_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(200),
            'email' => $this->string(300),
            'password' => $this->text(),
            'authKey' => $this->string(),
            'accessToken' => $this->string()
        ]);

        $this->insert('users', [
            'name' => 'Ivan Markov',
            'email' => 'barrowkis@gmail.com',
            'password' => \Yii::$app->security->generatePasswordHash('123456')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
