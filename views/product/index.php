

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">title</th>
      <th scope="col">alias</th>
      <th scope="col">price</th>
      <th scope="col">link</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($products as $product) : ?>
    <tr>
      <td><?=$product->title ?></td>
      <td><?=$product->alias ?></td>
      <td><?=$product->price ?></td>
        <td><?=\yii\helpers\Html::a('Link', "/product/view/?id=" . $product->id, ['class' => 'btn btn-primary btn-lg active'])?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>