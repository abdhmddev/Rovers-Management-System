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
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand row flex-nowrap align-items-center" href="#">
                <div class="logo">
                    <img src="images/logo.svg" alt="logo" class="logo">
                </div>
                <h3 class="main-color">الجوالة</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="roverlist.php">لائحة الجوالة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="roverdashboard.php?filter=1">دفتر المطاليب </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="info.php">الملف الشخصي</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/rms/php/handleLogout.php">الخروج </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  <div class="outerbox">
    <div class="innerbox">
    

         <?php include "php/roverlist.php" ?>  
      </div>
    </div>
  </div>


  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>