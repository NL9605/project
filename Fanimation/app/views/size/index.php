<!DOCTYPE html>
<html>
<head>
    <title>Size List</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Size List</h1>
<a href="index.php?controller=SizeController&action=create">Create New Size</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Size Name</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($sizes as $size): ?>
        <tr>
            <td><?= $size['id'] ?></td>
            <td><?= $size['size_name'] ?></td>
            <td>
                <a href="index.php?controller=SizeController&action=edit&id=<?= $size['id'] ?>">Edit</a>
                <a href="index.php?controller=SizeController&action=delete&id=<?= $size['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
