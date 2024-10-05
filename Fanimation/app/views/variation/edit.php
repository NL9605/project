<!DOCTYPE html>
<html>
<head>
    <title>Edit Variation</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Edit Variation</h1>
<form method="post" action="index.php?controller=VariationController&action=edit&id=<?= $variation['id'] ?>">
    <label for="variation_name">Variation Name:</label>
    <input type="text" id="variation_name" name="variation_name" value="<?= $variation['variation_name'] ?>" required><br><br>
    <button type="submit">Update</button>
</form>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
