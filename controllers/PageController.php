<?php


namespace app\controllers;


use app\models\Page;

class PageController extends \yii\web\Controller
{
    $nfjfoe = 1214124;
    
    public function actionIndex()
    {
        $page = Page::find()->all();
        


        return $this->render('index', ['pages' => $page]);
    }

    public function actionView($id)
    {
        $page = Page::findOne($id);

        return $this->render('view', ['page' => $page]);
    }
}
