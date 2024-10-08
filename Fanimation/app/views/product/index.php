<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Product List</h1>
<a href="index.php?controller=ProductController&action=create">Create New Product</a>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Category</th>
        <th>Size</th>
        <th>Color</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?php echo htmlspecialchars($product['name']); ?></td>
            <td><?php echo htmlspecialchars($product['description']); ?></td>
            <td><?php echo htmlspecialchars($product['price']); ?></td>
            <td><?php echo htmlspecialchars($product['stock']); ?></td>
            <td><?php echo htmlspecialchars($product['category_name']); ?></td>
            <td><?php echo htmlspecialchars($product['size_name']); ?></td>
            <td><?php echo htmlspecialchars($product['color']); ?></td>
            <td>
                <?php if (!empty($product['image'])): ?>
                    <img src="app/uploads/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" width="50">
                <?php else: ?>
                    No Image
                <?php endif; ?>
            </td>
            <td>
                <a href="index.php?controller=ProductController&action=edit&id=<?php echo $product['id']; ?>">Edit</a>
                <a href="index.php?controller=ProductController&action=delete&id=<?php echo $product['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
