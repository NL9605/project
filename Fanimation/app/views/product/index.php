
<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Product List</h1>
<a href="index.php?controller=ProductController&action=create">Create New Product</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Category ID</th>
        <th>Size ID</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>
    <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo htmlspecialchars($product['id']); ?></td>
                <td><?= htmlspecialchars($product['name']) ?></td>
                <td><?= htmlspecialchars($product['description']) ?></td>
                <td><?= htmlspecialchars($product['price']) ?></td>
                <td><?= htmlspecialchars($product['stock']) ?></td>
                <td><?= htmlspecialchars($product['category_id']) ?></td>
                <td><?= htmlspecialchars($product['size_id']) ?></td>
                <td>
                    <img src="app/uploads/<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" width="100" />
                </td>
                <td>
                    <a href="index.php?controller=ProductController&action=edit&id=<?= $product['id'] ?>">Edit</a>
                    <a href="index.php?controller=ProductController&action=delete&id=<?= $product['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8">No products found.</td>
        </tr>
    <?php endif; ?>
</table>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
