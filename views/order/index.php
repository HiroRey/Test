

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">customer name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
        <th scope="col">feedback</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($orders as $order) : ?>
        <tr>
            <td><?=$order->customer_name ?></td>
            <td><?=$order->email ?></td>
            <td><?=$order->phone ?></td>
            <td><?=$order->feedback ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>