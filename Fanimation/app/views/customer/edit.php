<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Edit Customer</h1>
<form method="post" action="index.php?controller=CustomerController&action=edit&id=<?= $customer['id'] ?>">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" value="<?= $customer['first_name'] ?>" required><br><br>
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" value="<?= $customer['last_name'] ?>" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?= $customer['email'] ?>" required><br><br>
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="<?= $customer['phone'] ?>"><br><br>
    <label for="address">Address:</label>
    <textarea id="address" name="address"><?= $customer['address'] ?></textarea><br><br>
    <button type="submit">Update</button>
</form>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
