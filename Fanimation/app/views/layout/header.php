<!DOCTYPE html>
<html>
<head>
    <title>Application Title</title>
</head>
<body>
<nav>
    <a href="index.php?controller=ProductController&action=index">Products</a>
    <a href="index.php?controller=OrderController&action=index">Orders</a>
    <a href="index.php?controller=CustomerController&action=index">Customers</a>
    <a href="index.php?controller=SizeController&action=index">Sizes</a>
    <a href="index.php?controller=CategoryController&action=index">Categories</a>

    <?php if (isset($_SESSION['user_id'])): ?>
        <span>Welcome, <?= htmlspecialchars($_SESSION['username']) ?></span>
        <a href="index.php?controller=UserController&action=logout">Logout</a>
    <?php else: ?>
        <a href="index.php?controller=UserController&action=login">Login</a>
    <?php endif; ?>
</nav>
