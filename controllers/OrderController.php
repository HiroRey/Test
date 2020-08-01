<?php


namespace app\controllers;


use app\models\Order;

class OrderController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $order = Order::find()->all();

        return $this->render('index', ['orders' => $order]);
    }

}