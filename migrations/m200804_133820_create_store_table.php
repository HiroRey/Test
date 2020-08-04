<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%store}}`.
 */
class m200804_133820_create_store_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'address' => $this->text(),
            'comment' => $this->text(),
            'userId' => $this->integer()
        ]);

        $this->addForeignKey(
            'fk_order_user',
            'order',
            'userId',
            'users',
            'id'
        );

        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'title' => $this->string('300'),
            'description' => $this->text(),
            'price' => $this->decimal(6, 2)
        ]);

        $this->createTable('order_product', [
            'id' => $this->primaryKey(),
            'orderId' => $this->integer(),
            'productId' => $this->integer(),
        ]);

        $this->insert('product', [
            'title' => 'MacBook',
            'description' => 'Best notebook ever',
            'price' => 2000
        ]);

        $this->insert('product', [
            'title' => 'ThinkPad',
            'description' => 'Best notebook ever 2',
            'price' => 1000
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%store}}');
    }
}
