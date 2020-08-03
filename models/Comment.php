<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $content
 * @property string|null $currentDataCreate
 * @property int|null $postId
 * @property Comment[] $comments
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'content'], 'string'],
            [['currentDataCreate'], 'safe'],
            [['postId'], 'integer'],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'content' => 'Content',
            'currentDataCreate' => 'Current Data Create',
            'postId' => 'Post ID',
        ];
    }

    public function getComments()
    {
        $this->hasMany(Comment::class, ['postId' => $this->id]);
    }
}
