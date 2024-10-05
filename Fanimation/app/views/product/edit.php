<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
<h1>Edit Product</h1>
<form action="index.php?controller=ProductController&action=edit&id=<?php echo $product['id']; ?>" method="post" enctype="multipart/form-data">
    <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>
    <input type="text" name="description" value="<?php echo htmlspecialchars($product['description']); ?>" required>
    <input type="number" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" required>
    <input type="number" name="stock" value="<?php echo htmlspecialchars($product['stock']); ?>" required>
    <input type="number" name="category_id" value="<?php echo htmlspecialchars($product['category_id']); ?>" required>
    <input type="number" name="size_id" value="<?php echo htmlspecialchars($product['size_id']); ?>" required>
    <input type="file" name="image">
    <button type="submit">Update Product</button>
</form>
<a href="index.php?controller=ProductController&action=index">Back to Product List</a>
</body>
</html>
