<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Pages".
 *
 * @property int $id
 * @property string|null $alias
 * @property string|null $intro
 * @property string|null $content
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['alias', 'intro'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => 'Alias',
            'intro' => 'Intro',
            'content' => 'Content',
        ];
    }
}
