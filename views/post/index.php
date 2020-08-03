<?php
/**
 * @var  \app\models\Post $posts
 */

?>

<h1>Posts List:</h1>
<div class="alert alert-dark" role="alert">
    <?=\yii\helpers\Html::a('Create Post', "/post/create/", ['class' => 'btn btn-success btn-lg active'])?>
</div>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Short Description</th>
        <th scope="col">View link</th>
        <th scope="col">Update link</th>
        <th scope="col">Delete link</th>

    </tr>
    </thead>
    <tbody>

    <?php foreach ($posts as $post) : ?>
        <tr>
            <td><?=$post->title ?></td>
            <td><?=$post->shortDescription ?></td>
            <td><?=\yii\helpers\Html::a('View', "/post/view/?id=" . $post->id, ['class' => 'btn btn-primary'])?></td>
            <td><?=\yii\helpers\Html::a('Update', "/post/update/?id=" . $post->id, ['class' => 'btn btn-warning'])?></td>
            <td><?=\yii\helpers\Html::a('Delete', "/post/delete/?id=" . $post->id, ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Are you sure?")'])?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>