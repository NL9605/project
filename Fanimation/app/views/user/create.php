<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Create User</h1>
<form method="post" action="index.php?controller=UserController&action=create">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <label for="role">Role:</label>
    <select id="role" name="role">
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select><br><br>
    <button type="submit">Create</button>
</form>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
