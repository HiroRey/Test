<?php

use yii\db\Migration;

/**
 * Class m200801_132447_create_table_products
 */
class m200801_132447_create_table_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Products', [
            'id' => $this->primaryKey(),
            'title' => $this->char(255),
            'alias' => $this->char(255),
            'price' => $this->integer(),
            'description' => $this->text()]);

        $this->insert('Products', [
            'title' => 'Laptop',
            'alias' => 'cool device',
            'price' => 2200,
            'description' => 'some some some description'
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('Products');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200801_132447_create_table_products cannot be reverted.\n";

        return false;
    }
    */
}
