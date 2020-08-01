<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Orders".
 *
 * @property int $id
 * @property string|null $customer_name
 * @property string|null $email
 * @property int|null $phone
 * @property string|null $feedback
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone'], 'integer'],
            [['feedback'], 'string'],
            [['customer_name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_name' => 'Customer Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'feedback' => 'Feedback',
        ];
    }
}
