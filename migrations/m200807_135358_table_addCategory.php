<?php

use yii\db\Migration;

/**
 * Class m200807_135358_table_addCategory
 */
class m200807_135358_table_addCategory extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('category', [
            'title' => 'Drinks',
            'productId' => 2
        ]);

        $this->insert('category', [
            'title' => 'Beer',
            'parentCategoryId' => 1,
            'productId' => 2
        ]);

        $this->insert('category', [
            'title' => 'Bud Beer',
            'parentCategoryId' => 2,
            'productId' => 2
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200807_135358_table_addCategory cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200807_135358_table_addCategory cannot be reverted.\n";

        return false;
    }
    */
}
