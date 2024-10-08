<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
<h1>Edit Product</h1>
<form method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
    <br>
    <label for="description">Description:</label>
    <textarea name="description" required><?= htmlspecialchars($product['description']) ?></textarea>
    <br>
    <label for="price">Price:</label>
    <input type="number" name="price" step="0.01" value="<?= htmlspecialchars($product['price']) ?>" required>
    <br>
    <label for="stock">Stock:</label>
    <input type="number" name="stock" value="<?= htmlspecialchars($product['stock']) ?>" required>
    <br>
    <label for="category_id">Category ID:</label>
    <input type="number" name="category_id" value="<?= htmlspecialchars($product['category_id']) ?>" required>
    <br>
    <label for="size_id">Size ID:</label>
    <input type="number" name="size_id" value="<?= htmlspecialchars($product['size_id']) ?>" required>
    <br>
    <label for="size_id">Color:</label>
    <input type="text" name="color" value="<?= htmlspecialchars($product['color']) ?>" required>
    <br>
    <label for="image">Image:</label>
    <input type="file" name="image">
    <br>
    <img src="app/uploads/<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" width="100" />
    <br>
    <input type="submit" value="Update Product">
</form>
</body>
</html>