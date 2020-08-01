<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Products".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $alias
 * @property int|null $price
 * @property string|null $description
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price'], 'integer'],
            [['description'], 'string'],
            [['title', 'alias'], 'string', 'max' => 255],
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
            'alias' => 'Alias',
            'price' => 'Price',
            'description' => 'Description',
        ];
    }
}
