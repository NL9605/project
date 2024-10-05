<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Edit Product</h1>
<form action="index.php?controller=ProductController&action=edit&id=<?= htmlspecialchars($product['id']) ?>" method="post" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="text" name="name" value="<?= htmlspecialchars($product['name']) ?>" required><br>

    <label>Description:</label>
    <textarea name="description" required><?= htmlspecialchars($product['description']) ?></textarea><br>

    <label>Price:</label>
    <input type="number" name="price" value="<?= htmlspecialchars($product['price']) ?>" required><br>

    <label>Stock:</label>
    <input type="number" name="stock" value="<?= htmlspecialchars($product['stock']) ?>" required><br>

    <label>Category ID:</label>
    <input type="number" name="category_id" value="<?= htmlspecialchars($product['category_id']) ?>" required><br>

    <label>Size ID:</label>
    <input type="number" name="size_id" value="<?= htmlspecialchars($product['size_id']) ?>" required><br>

    <label>Current Image:</label>
    <img src="<?= htmlspecialchars($product['image']) ?>" alt="Image" width="100"><br>

    <label>New Image (optional):</label>
    <input type="file" name="image"><br>

    <input type="submit" value="Update Product">
</form>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
