<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $shortDescription
 * @property string|null $createData
 * @property string|null $description
 */
class Post extends \yii\db\ActiveRecord
{
    const SCENARIO_ADMIN_EDIT = 'admin_edit';
    const SCENARIO_USER_EDIT = 'user_edit';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shortDescription', 'description'], 'string'],
            [['createData'], 'safe'],
            [['title'], 'string', 'max' => 400],
            [['title', 'shortDescription', 'description'], 'required', 'on' => [self::SCENARIO_USER_EDIT]],
            [['title'], 'required', 'on' => [self::SCENARIO_ADMIN_EDIT]],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'shortDescription' => 'Short Description',
            'createData' => 'Create Data',
            'description' => 'Description',
        ];
    }

    public function scenarios()
    {
        return array_merge(parent::scenarios(), [
            self::SCENARIO_ADMIN_EDIT => ['title', 'shortDescription', 'description'],
            self::SCENARIO_USER_EDIT => ['title', 'shortDescription', 'description']
        ]);
    }
}
