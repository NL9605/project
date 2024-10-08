<!DOCTYPE html>
<html>
<head>
    <title>Create Category</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Create Category</h1>
<form method="post" action="index.php?controller=CategoryController&action=create">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    <button type="submit">Create</button>
</form>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
