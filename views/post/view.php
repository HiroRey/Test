<?php
/**
 * @var \app\models\Post $post
 */
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

<div class="alert alert-light" role="alert">
    <?=\yii\helpers\Html::a('Create Comment', "/post/createComment/" . $post->id, ['class' => 'btn btn-success btn-lg active'])?>
</div>

<div class="alert alert-dark" role="alert">
<h3><?=$post->comments->name?></h3>
    <h3><?=$post->comments->email ?></h3>
    <h4><?=$post->comments->currentDataCreate ?></h4>
    <p><?=$post->comments->content ?></p>
</div>

