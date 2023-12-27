<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/logo.svg" type="image/x-icon">
  <title>الجوالة</title>
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/components.css">
  <link rel="stylesheet" href="styles/login.css">
  <link rel="stylesheet" href="bootstrap/css//bootstrap.min.css">
</head>

<body>

  <?php include "components/innerNavbar.php" ?>

  <div class="outerbox">
    <div class="innerbox">
      <form action="php/handleLogin.php" method="post">
        <div>
          <h2>تسجيل الدخول</h3>
            <br>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">كلمة السر</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 ">
          <div><a href="signup.php">ليس لديك حساب؟ سجل الآن</a></div>
        </div>
        <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
      </form>
    </div>
  </div>

  

  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="scripts/login.js"></script>
</body>

</html>