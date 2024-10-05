<!DOCTYPE html>
<html>
<head>
    <title>Create Variation</title>
</head>
<body>
<?php include 'app/views/layout/header.php'; ?>
<h1>Create Variation</h1>
<form method="post" action="index.php?controller=VariationController&action=create">
    <label for="variation_name">Variation Name:</label>
    <input type="text" id="variation_name" name="variation_name" required><br><br>
    <button type="submit">Create</button>
</form>
<?php include 'app/views/layout/footer.php'; ?>
</body>
</html>
