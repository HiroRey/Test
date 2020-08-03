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
