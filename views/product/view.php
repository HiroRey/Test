<?php
/**
 * @var \app\models\Product $product
 */
?>


<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?=$product->title ?></td>
        <td><?=$product->description?></td>
        <td><?=$product->price ?></td>
    </tr>
    </tbody>
</table>

<div class="alert alert-primary" role="alert">
    <ol>
        <?php foreach ($product->category  as $item) : ?>
            <li><i>Category: </i><a href="/product/list-category/?id=<?=$product->id?>" role="button"><?=$item->title?></a></li>
        <?php endforeach; ?>
    </ol>
</div>

