<?php
/**
 * @var \app\models\Comment $commentt
 * @var \app\models\Post $post
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Data create</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$post->title ?></td>
            <td><?=$post->description?></td>
            <td><?=$post->createData ?></td>
        </tr>
    </tbody>
</table>

<hr>
<h2>List Comments:</h2>
    <div class="alert alert-warning" role="alert">
        <?php foreach ($post->comments as $comment) : ?>
            <h3><?=$comment->name ?></h3>
            <h3><?=$comment->email ?></h3>
            <h4><?=$comment->currentDataCreate ?></h4>
            <p><?=$comment->content ?></p>
            <hr>
        <?php endforeach; ?>
    </div>
<h2>Add Comments:</h2>
<?php  $form = ActiveForm::begin(['action' => '/post/comment/?id=' . $post->id]) ?>

<?=$form->field($commentt, 'name')->textInput()->hint('Пожалуйста, введите ваше имя')?>
<?=$form->field($commentt, 'email')->textInput()->hint('Пожалуйста, введите ваш email')?>
<?=$form->field($commentt, 'content')->textInput()->hint('Пожалуйста, введите полное описание')?>

<div class="form-group">
    <?= Html::submitButton('Create', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>


