<?php

use yii\db\Migration;

/**
 * Class m200801_134004_create_orders_table
 */
class m200801_134004_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Orders', [
            'id' => $this->primaryKey(),
            'customer_name' => $this->char(255),
            'email' => $this->char(255),
            'phone' => $this->bigInteger(),
            'feedback' => $this->text()]);

        $this->insert('Orders', [
            'customer_name' => 'Ivan',
            'email' => 'cool device',
            'phone' => 380983159798,
            'feedback' => 'some some some feedback']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Orders');

        return false;
    }
}
