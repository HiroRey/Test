<?php


namespace app\controllers;


use yii\web\Controller;

class CartController extends Controller
{

    public function actionAddProduct($id)
    {
        \Yii::$app->cart->addProduct($id);

        $this->redirect('/product');

    }

    public function actionIndex()
    {
        $products = \Yii::$app->cart->getProducts();

        return $this->render('index', ['products' => $products]);
    }

}