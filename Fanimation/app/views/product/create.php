<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
<h1>Add New Product</h1>
<form action="index.php?controller=ProductController&action=create" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Product Name" required>
    <input type="text" name="description" placeholder="Description" required>
    <input type="number" name="price" placeholder="Price" required>
    <input type="number" name="stock" placeholder="Stock" required>
    <input type="number" name="category_id" placeholder="Category ID" required>
    <input type="number" name="size_id" placeholder="Size ID" required>
    <input type="file" name="image" required>
    <button type="submit">Add Product</button>
</form>
<a href="index.php?controller=ProductController&action=index">Back to Product List</a>
</body>
</html>
