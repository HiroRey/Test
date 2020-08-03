<h1>Welcome to site!</h1>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">alias</th>
        <th scope="col">intro</th>
        <th scope="col">link</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($pages as $page) : ?>
        <tr>
            <td><?=$page->alias ?></td>
            <td><?=$page->intro ?></td>
            <td><?=\yii\helpers\Html::a('Link', "/page/view/?id=" . $page->id, ['class' => 'btn btn-primary btn-lg active'])?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>