<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m200806_161756_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(200),
            'parentCategoryId' => $this->integer(),
            'productId' => $this->integer()
        ]);

        $this->insert('category', [
            'title' => 'Product',
            'productId' => 1
        ]);

        $this->insert('category', [
            'title' => 'Laptop',
            'parentCategoryId' => 1,
            'productId' => 1
        ]);

        $this->insert('category', [
            'title' => 'Asus',
            'parentCategoryId' => 2,
            'productId' => 1
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
