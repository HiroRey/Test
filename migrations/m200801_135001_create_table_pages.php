<?php

use yii\db\Migration;

/**
 * Class m200801_135001_create_table_pages
 */
class m200801_135001_create_table_pages extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Pages', [
            'id' => $this->primaryKey(),
            'alias' => $this->char(255),
            'intro' => $this->char(255),
            'content' => $this->text()]);

        $this->insert('Pages', [
            'alias' => 'example.com',
            'intro' => 'cool device',
            'content' => 'some some content',
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Pages');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200801_135001_create_table_pages cannot be reverted.\n";

        return false;
    }
    */
}
