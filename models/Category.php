<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $parentCategoryId
 * @property int|null $productId
 * @property Category[] $childCategory
 * @property Product[] $product
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parentCategoryId', 'productId'], 'integer'],
            [['title'], 'string', 'max' => 200],
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
            'parentCategoryId' => 'Parent Category ID',
            'productId' => 'Product ID',
        ];
    }

    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'productId']);
    }

    public function getChildCategory()
    {
        return $this->hasMany(Category::class, ['parentCategoryId' => 'id']);
    }
}
