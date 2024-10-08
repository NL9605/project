<!DOCTYPE html>
<html>
<head>
    <title>Create Size</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Create Size</h1>
<form method="post" action="index.php?controller=SizeController&action=create">
    <label for="size_name">Size Name:</label>
    <input type="text" id="size_name" name="size_name" required><br><br>
    <button type="submit">Create</button>
</form>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
