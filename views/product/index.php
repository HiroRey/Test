<?php
/**
 * @var \app\models\Product[] $products
 */
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
        <th scope="col">Buy</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach ($products as $product) : ?>
    <tr>
      <td><?=$product->title ?></td>
      <td><?=$product->description ?></td>
      <td><?=$product->price ?></td>
        <td><a class="btn btn-success" href="/product/view/?id=<?=$product->id ?>" role="button">View</a></td>
        <td><a class="btn btn-primary" href="/cart/add-product/?id=<?=$product->id ?>" role="button">Add product</a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>