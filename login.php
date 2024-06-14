<!-- customer/login.php -->
<?php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Query the database for the customer user
    $sql = "SELECT * FROM users WHERE email='$email' AND role='customer'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_roles'] = $user['role'];
        header("Location: register.php");
        exit();
    } else {
        $error = "No customer found with this email. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Login</title>
    <link rel="stylesheet" type="text/css" href="LoginCode.html">
</head>
<body>
    
    <h2>Customer Login</h2>
    <form method="post">
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <label>Email:</label>
        <input type="email" name="Email" required><br>
        
        <label>Password:</label>
        <input type="password" name="Password" required><br>
            <input type="submit" value="Login">
    </form>
    
</body>
</html>
