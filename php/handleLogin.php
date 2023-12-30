<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['pass'];
 

    $query = mysqli_prepare($con, "SELECT * FROM users WHERE email = ?");
    mysqli_stmt_bind_param($query, 's', $email);
    mysqli_stmt_execute($query);
    $result = mysqli_stmt_get_result($query);
   
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['userid'] = $row['id'];
            header("Location:/rms/info.php");
            exit;
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "Email not found";
    }
    mysqli_stmt_close($query);
}
mysqli_close($con);  
?>
