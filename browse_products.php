<!-- customer/browse_products.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Browse Products</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="../js/search.js"></script>
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <h2>Browse Products</h2>
    <input type="text" id="searchInput" onkeyup="searchProducts()" placeholder="Search for products...">
    <div id="productList">
        <!-- Products will be dynamically loaded here -->
    </div>
    
</body>
</html>
