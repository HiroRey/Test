<?php


namespace app\components;


use app\models\Product;
use yii\base\Component;

class Cart extends Component
{

    public function addProduct($id)
    {
        $cart = \Yii::$app->session->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }

        \Yii::$app->session->set('cart', $cart);

    }

    public function getProducts()
    {
        $result = [];

        $products = \Yii::$app->session->get('cart');
    if(!empty(\Yii::$app->session->get('cart'))) {

        foreach ($products as $id => $count) {
            $result[] = [
                'product' => Product::findOne($id),
                'count' => $count

            ];
        }
    }
        return $result;
    }

    public function getTotal()
    {
        $result = 0;

        $products = \Yii::$app->session->get('cart');
        if(!empty(\Yii::$app->session->get('cart'))) {
            foreach ($products as $id => $count) {
                $result += Product::findOne($id)->price * $count;
            }
        }

        return $result;
    }

}