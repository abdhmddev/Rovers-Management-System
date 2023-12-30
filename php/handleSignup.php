<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $check_query = mysqli_prepare($con, "SELECT COUNT(*) FROM users WHERE email = ?");
    mysqli_stmt_bind_param($check_query, 's', $email);
    mysqli_stmt_execute($check_query);
    mysqli_stmt_bind_result($check_query, $count);
    mysqli_stmt_fetch($check_query);
    mysqli_stmt_close($check_query);

    if ($count > 0) {
        echo "Email already exists in the database";
        exit; 
    } else {
        $stmt = mysqli_prepare($con, "INSERT INTO users (email, password) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, 'ss', $email, $hashedPassword); 
        $result = mysqli_stmt_execute($stmt);
        if (!$result) {
            die('Record not added: ' . mysqli_error($con));
        } else {
            header('Location:/rms/login.php');
            exit; 
        }
        mysqli_stmt_close($stmt);
    }
}
mysqli_close($con);  
?>
