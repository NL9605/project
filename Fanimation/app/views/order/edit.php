<!DOCTYPE html>
<html>
<head>
    <title>Edit Order</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Edit Order</h1>
<form method="post" action="index.php?controller=OrderController&action=edit&id=<?= $order['id'] ?>">
    <label for="customer_id">Customer ID:</label>
    <input type="number" id="customer_id" name="customer_id" value="<?= $order['customer_id'] ?>" required><br><br>
    <label for="total">Total:</label>
    <input type="text" id="total" name="total" value="<?= $order['total'] ?>" required><br><br>
    <button type="submit">Update</button>
</form>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
