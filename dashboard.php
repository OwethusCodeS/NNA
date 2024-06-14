<!-- admin/dashboard.php -->
<?php
session_start();
if ($_SESSION['user_role'] != 'admin') {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <h2>Admin Dashboard</h2>
    <nav>
        <ul>
            <li><a href="verify_users.php">Verify Users</a></li>
            <li><a href="manage_orders.php">Manage Orders</a></li>
        </ul>
    </nav>
    <?php include('../includes/footer.php'); ?>
</body>
</html>
