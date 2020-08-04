<?php


namespace app\components;


use yii\filters\AccessControl;
use yii\web\Controller;

class AdminController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view', 'create', 'update', 'delete'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['view', 'index', 'create', 'update', 'delete'],
                        'roles' => ['@'],
                    ],
                      ],
            ]
        ];
    }

}