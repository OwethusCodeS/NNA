<!-- orders/checkout.php -->
<?php
session_start();
if (!isset($_SESSION['UserID']) || $_SESSION['UserRoles'] != 'Users') {
    header("Location: ../Customer/login.php");
    exit();
}

include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_id = $_SESSION['UserID'];
    $product_id = $_POST['ProductID'];
    $quantity = $_POST['Quantity'];

    // Insert order into the database
    $sql = "INSERT INTO orders (CustomerID, ProductID, Suantity, OrderStatus) VALUES ('$customerID', '$ProductID', '$Quantity', 'pending')";
    if ($conn->query($sql) === TRUE) {
        $order_id = $conn->insert_id;
        // Send notification to supplier (you can implement email notification here)
        echo "Order placed successfully. Your order ID is " . $OrderID;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
   
    <h2>Checkout</h2>
    <form method="post">
        <label for="ProductID">Product ID:</label>
        <input type="text" id="ProductID" name="ProductID" required><br>
        <label for="Quantity">Quantity:</label>
        <input type="number" id="Quantity" name="Quantity" required><br>
        <input type="submit" value="Place Order">
    </form>
   
</body>
</html>
