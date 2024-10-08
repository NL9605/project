<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
<h1>Create Product</h1>
<form method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <br>
    <label for="description">Description:</label>
    <textarea name="description" required></textarea>
    <br>
    <label for="price">Price:</label>
    <input type="number" name="price" step="0.01" required>
    <br>
    <label for="stock">Stock:</label>
    <input type="number" name="stock" required>
    <br>
    <label for="category_id">Category ID:</label>
    <input type="number" name="category_id" required>
    <br>
    <label for="size_id">Size ID:</label>
    <input type="number" name="size_id" required>
    <br>
    <label for="color">Color:</label>
    <input type="text" name="color" required>
    <br>
    <label for="image">Image:</label>
    <input type="file" name="image" required>
    <br>
    <input type="submit" value="Create Product">
</form>
</body>
</html>