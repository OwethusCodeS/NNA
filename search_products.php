<?php
// api/search_products.php
include('db.php');

$query = $_GET['query'];

$sql = "SELECT * FROM Products WHERE name LIKE '%$query%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    while ($row = $result->fetch_assoc()) 
    {
        echo "<div class='product'>";
        echo "<h3>" . $row['ProductName'] . "</h3>";
        echo "<p>" . $row['Description'] . "</p>";
}
    }
       
?>