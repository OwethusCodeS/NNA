<!-- customer/register.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="../js/validation.js"></script>
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <h2>Create an Account</h2>
    <form id="registrationForm" method="post" onsubmit="return validateForm()">
        <label>Firstname:</label>
        <input type="text" name="firstName" required><br>

        <label>Surname:</label>
        <input type="text" name="surname" required><br>

        <label>Cellphone Number:</label>
        <input type="text" name="cellnumber" required><br>
        
        <label>Address</label>:</label>
        <input type="text" name="address" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>
        
        <label>Password:</label>
        <input type="password" name="password" required><br>

        <label>Confirm Password:</label>
        <input type="password" name="confirmPassword" required><br>
    
            
        <input type="submit" value="Register">
    </form>
    
</body>
</html>
