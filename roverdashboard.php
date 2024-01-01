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
  <link rel="stylesheet" href="styles/dashboard.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
  <?php include "components/mainnavbar.php" ?>
  <?php $roverid = $_GET['id']; ?>


  <div class="outerbox">
    <div class="innerbox">
      <?php
      if (isset($_GET['id'])) {
        echo "<div class='pagebtn row justify-content-around flex-nowrap w-100'>
        <div class='col-4 m-0 p-1 row justify-content-center align-items-center text-center'><a href='roverdashboard.php?id=$roverid&filter=1' style='width: 100%;
    color: #fff !important; background-color: var(--main-color); padding:5px; border-radius:5px;'>مرحلة الإعداد</a></div>
        <div class='col-4 m-0 p-1 row justify-content-center align-items-center text-center'><a href='roverdashboard.php?id=id=$roverid&filter=2' style='width: 100%;
    color: #fff !important; background-color: var(--main-color); padding:5px; border-radius:5px;'>مرحلة التدريب</a></div>
        <div class='col-4 m-0 p-1 row justify-content-center align-items-center text-center'><a href='roverdashboard.php?id=id=$roverid&filter=3' style='width: 100%;
    color: #fff !important; background-color: var(--main-color); padding:5px; border-radius:5px;'>مرحلة الخدمة العامة</a></div>
      </div>";
      } else {
        echo '<div class="pagebtn row justify-content-around flex-nowrap w-100">
        <div class="col-4 m-0 p-1 row justify-content-center align-items-center text-center"><a href="roverdashboard.php?filter=1" style="width: 100%;
    color: #fff !important; background-color: var(--main-color); padding:5px; border-radius:5px;">مرحلة الإعداد</a></div>
        <div class="col-4 m-0 p-1 row justify-content-center align-items-center text-center"><a href="roverdashboard.php?filter=2" style="width: 100%;
    color: #fff !important; background-color: var(--main-color); padding:5px; border-radius:5px;">مرحلة التدريب</a></div>
        <div class="col-4 m-0 p-1 row justify-content-center align-items-center text-center"><a href="roverdashboard.php?filter=3" style="width: 100%;
    color: #fff !important; background-color: var(--main-color); padding:5px; border-radius:5px;">مرحلة الخدمة العامة</a></div>
      </div>';
      }
      ?>



      <hr class="mb-5">
      <div class="row">
        <?php include "php/demands.php" ?>
      </div>
    </div>
  </div>


  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="scripts/check.js"></script>
</body>

</html>