<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comments}}`.
 */
class m200803_152856_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
            'email' => $this->string(),
            'content' => $this->text(),
            'currentDataCreate' => $this->dateTime()->defaultExpression('NOW()'),
            'postId' => $this->integer()
        ]);

        $this->insert('comments', [
            'name' => 'Ivan Markov',
            'email' => 'barrowkiss@gmail.com',
            'content' => 'This post so fucking bad!',
            'postId' => 1
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comments}}');
    }
}
