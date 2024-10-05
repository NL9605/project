<!DOCTYPE html>
<html>
<head>
    <title>Variation List</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Variation List</h1>
<a href="index.php?controller=VariationController&action=create">Create New Variation</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Variation Name</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($variations as $variation): ?>
        <tr>
            <td><?= $variation['id'] ?></td>
            <td><?= $variation['variation_name'] ?></td>
            <td>
                <a href="index.php?controller=VariationController&action=edit&id=<?= $variation['id'] ?>">Edit</a>
                <a href="index.php?controller=VariationController&action=delete&id=<?= $variation['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
