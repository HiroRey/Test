<?php


namespace app\controllers;


use app\models\Order;

class OrderController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $order = new Order();

        return $this->render('index', ['order' => $order]);
    }

    public function actionCreateOrder()
    {
        $order = new Order();

        if(\Yii::$app->request->isPost) {
            $order->load(\Yii::$app->request->post());
            $order->save();

            $products = \Yii::$app->cart->getProducts();

            foreach ($products as $product) {
                $order->link('products', $product['product'], ['count' => $product['count']]);
            }
        }
        return $this->redirect('/product/index');
    }
}