<?php include 'auth.php';

if (isset($_SESSION['formsubmitted']) && $_SESSION['formsubmitted'] === "yes") {
    header("Location:/RMS/roverdashboard.php?filter=1");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.svg" type="image/x-icon">
    <title>الجوالة</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/components.css">
    <link rel="stylesheet" href="styles/info.css">
    <link rel="stylesheet" href="bootstrap/css//bootstrap.min.css">
</head>

<body>
<div  class="outerbox">
    <div class="innerbox">
    <?php include "components/info.php" ?>
    </div>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>