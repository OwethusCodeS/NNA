<?php
include('db.php');
session_start();

if ($_SESSION['UserRoles'] != 'Admin') {
    header('Location: index.php');
}

if (isset($_GET['Verified'])) {
    $user_id = $_GET['Verified'];
    $sql = "UPDATE UserID SET Verified=1 WHERE User=$UserID";
    if ($conn->query($sql) === TRUE) {
        echo "User verified successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$sql = "SELECT * FROM users WHERE Verified=0";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Verify Users</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <h2>Unverified Users</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['UserID']; ?></td>
                <td><?php echo $row['Username']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><a href="verify_users.php=<?php echo $row['UserID']; ?>">Verify</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>
