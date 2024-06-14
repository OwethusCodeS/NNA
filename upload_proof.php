<!-- orders/upload_proof.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Upload Proof of Payment</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="../js/upload.js"></script>
</head>
<body>
    <?php include('header.php'); ?>
    <h2>Upload Proof of Payment</h2>
    <form id="uploadForm" enctype="multipart/form-data">
        <input type="file" name="Proof Of Payment" id="PoP" required>
        <input type="submit" value="Upload">
    </form>
    <div id="uploadStatus"></div>
    <?php include('footer.php'); ?>
</body>
</html>
