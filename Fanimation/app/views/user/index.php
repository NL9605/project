<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>User List</h1>
<a href="index.php?controller=UserController&action=create">Create New User</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['username'] ?></td>
            <td><?= $user['role'] ?></td>
            <td>
                <a href="index.php?controller=UserController&action=edit&id=<?= $user['id'] ?>">Edit</a>
                <a href="index.php?controller=UserController&action=delete&id=<?= $user['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
