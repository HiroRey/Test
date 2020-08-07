<?php


namespace app\controllers;


use app\models\Product;

class ProductController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $products = Product::find()->all();

        return $this->render('index', ['products' => $products]);
    }

    public function actionView($id)
    {
        $product = Product::findOne($id);

        return $this->render('view', ['product' => $product]);
    }

    public function actionListCategory($id)
    {

        $product = Product::findOne($id);

        return $this->render('listCategory', ['product' => $product]);
    }
}