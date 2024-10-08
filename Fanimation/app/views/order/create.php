<!DOCTYPE html>
<html>
<head>
    <title>Create Order</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Create Order</h1>
<form method="post" action="index.php?controller=OrderController&action=create">
    <label for="customer_id">Customer ID:</label>
    <input type="number" id="customer_id" name="customer_id" required><br><br>
    <label for="total">Total:</label>
    <input type="text" id="total" name="total" required><br><br>
    <button type="submit">Create</button>
</form>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
