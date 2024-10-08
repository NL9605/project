<!DOCTYPE html>
<html>
<head>
    <title>Order List</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Order List</h1>
<a href="index.php?controller=OrderController&action=create">Create New Order</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Customer ID</th>
        <th>Total</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($orders as $order): ?>
        <tr>
            <td><?= $order['id'] ?></td>
            <td><?= $order['customer_id'] ?></td>
            <td><?= $order['total'] ?></td>
            <td><?= $order['status'] ?></td>
            <td>
                <a href="index.php?controller=OrderController&action=edit&id=<?= $order['id'] ?>">Edit</a>
                <a href="index.php?controller=OrderController&action=delete&id=<?= $order['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
