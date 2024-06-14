<!-- supplier/update_order_status.php -->
<?php
session_start();
if ($_SESSION['user_role'] != 'supplier') {
    header("Location: ../index.php");
    exit();
}

include('../db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $order_id = $_POST['order_id'];
    $status = $_POST['status'];

    $sql = "UPDATE orders SET status='$status' WHERE id=$order_id";
    if ($conn->query($sql) === TRUE) {
        echo "Order status updated successfully";
    } else {
        echo "Error updating order status: " . $conn->error;
    }
}

header("Location: manage_orders.php");
?>
