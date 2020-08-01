<?php


namespace app\controllers;


use app\models\Product;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionIndex()
    {
        $product = Product::find()->all();

        return $this->render('index', ['products' => $product]);
    }

    public function actionView($id)
    {
        $id = Product::findOne($id);

        return $this->render('view', ['id' => $id]);
    }
}