<?php


namespace app\controllers;


use app\models\Post;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        $posts = Post::find()->all();

        return $this->render('index', ['posts' => $posts]);
    }

    public function actionView($id)
    {
        $post = Post::findOne($id);

        return $this->render('view', ['post' => $post]);

    }

    public function actionCreate()
    {
        $post = new Post();

        if (\Yii::$app->request->isPost) {

            $post->load(\Yii::$app->request->post());
            $post->setScenario(Post::SCENARIO_USER_EDIT);
            if($post->save()) {
               $this->redirect('../index');
            }
        }

        return $this->render('create', ['post' => $post]);
    }

    public function actionUpdate($id)
    {
        $post = Post::findOne($id);

        if (\Yii::$app->request->isPost && !empty(\Yii::$app->request->post())) {
            $post->load(\Yii::$app->request->post());
            $post->setScenario(Post::SCENARIO_USER_EDIT);
            if($post->save()) {
                $this->redirect('../index');
            }
        }

        return $this->render('update', ['post' => $post]);
    }

    public function actionDelete($id)
    {
        if(isset($id) && !empty($id)) {

            $post = Post::findOne($id);
            $post->delete();
            $this->redirect('../index');
        }
    }


}