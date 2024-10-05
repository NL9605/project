<!DOCTYPE html>
<html>
<head>
    <title>Create Customer</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Create Customer</h1>
<form method="post" action="index.php?controller=CustomerController&action=create">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required><br><br>
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone"><br><br>
    <label for="address">Address:</label>
    <textarea id="address" name="address"></textarea><br><br>
    <button type="submit">Create</button>
</form>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
