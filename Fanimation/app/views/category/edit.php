<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Edit Category</h1>
<form method="post" action="index.php?controller=CategoryController&action=edit&id=<?= $category['id'] ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?= $category['name'] ?>" required><br><br>
    <button type="submit">Update</button>
</form>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
