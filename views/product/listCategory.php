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
            <td><?=$product->description ?></td>
            <td><?=$product->price ?></td>
        </tr>
    </tbody>
</table>