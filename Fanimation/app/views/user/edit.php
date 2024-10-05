<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Edit User</h1>
<form method="post" action="index.php?controller=UserController&action=edit&id=<?= $user['id'] ?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?= $user['username'] ?>" required><br><br>
    <label for="role">Role:</label>
    <select id="role" name="role">
        <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
        <option value="user" <?= $user['role'] === 'user' ? 'selected' : '' ?>>User</option>
    </select><br><br>
    <button type="submit">Update</button>
</form>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
