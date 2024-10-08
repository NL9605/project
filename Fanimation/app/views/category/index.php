<!DOCTYPE html>
<html>
<head>
    <title>Category List</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Category List</h1>
<a href="index.php?controller=CategoryController&action=create">Create New Category</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?= $category['id'] ?></td>
            <td><?= $category['name'] ?></td>
            <td>
                <a href="index.php?controller=CategoryController&action=edit&id=<?= $category['id'] ?>">Edit</a>
                <a href="index.php?controller=CategoryController&action=delete&id=<?= $category['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
