<!DOCTYPE html>
<html>
<head>
    <title>Customer List</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Customer List</h1>
<a href="index.php?controller=CustomerController&action=create">Create New Customer</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($customers as $customer): ?>
        <tr>
            <td><?= $customer['id'] ?></td>
            <td><?= $customer['first_name'] ?></td>
            <td><?= $customer['last_name'] ?></td>
            <td><?= $customer['email'] ?></td>
            <td><?= $customer['phone'] ?></td>
            <td><?= $customer['address'] ?></td>
            <td>
                <a href="index.php?controller=CustomerController&action=edit&id=<?= $customer['id'] ?>">Edit</a>
                <a href="index.php?controller=CustomerController&action=delete&id=<?= $customer['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>