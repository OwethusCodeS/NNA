<!-- admin/manage_orders.php -->
<?php
session_start();
if ($_SESSION['user_roles'] != 'Admin') {
    header("Location:index.php");
    exit();
}

include('db.php');

$sql = "SELECT * FROM Orders";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Orders</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <?php include('header.php'); ?>
    <h2>Manage Orders</h2>
    <table>
        <tr>
            <th>Order ID</th>
            <th>Customer ID</th>
            <th>Product ID</th>
            <th>Quantity</th>
            <th>StatusID</th>
            <th>Proof of Payment</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['UserID'] . "</td>";
                echo "<td>" . $row['ProductID'] . "</td>";
                echo "<td>" . $row['Quantity'] . "</td>";
                echo "<td>" . $row['StatusID'] . "</td>";
                if ($row['ProofOfPayment']) {
                    echo "<td><a href='" . $row['ProofOfPayment'] . "'>View Proof</a></td>";
                } else {
                    echo "<td>No proof uploaded</td>";
                }
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No orders found</td></tr>";
        }
        ?>
    </table>
    <?php include('footer.php'); ?>
</body>
</html>
