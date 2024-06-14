<?php
session_start();
include('db.php');

$customer_id = $_SESSION['user_id'];

$sql = "SELECT * FROM orders WHERE customer_id = $CustomerID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='order'>";
        echo "<h3>Order ID: " . $row['OrderID'] . "</h3>";
        echo "<p>Product ID: " . $row['ProductID'] . "</p>";
        echo "<p>Quantity: " . $row['Quantity'] . "</p>";
        echo "<p>Status: " . $row['StatusDescription'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No orders found.";
}

$conn->close();
?>
