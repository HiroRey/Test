<?php
/**
 * @var \app\models\Product[] $products
 */

?>

<table class="table">
    <tbody>
    <?php foreach ($products as $product) : ?>
        <tr>
            <td><?=$product['product']->title ?></td>
            <td><?=$product['product']->price ?></td>
            <td><?=$product['count'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<p><b>Total: <?=\Yii::$app->cart->getTotal() ?></b></p>
<a href="/order/index" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Add Order</a>
