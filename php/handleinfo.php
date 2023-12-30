<?php
include "connect.php";

function createImageFoldersIfNotExists($profileFolder, $cardFolder)
{
    if (!file_exists($profileFolder)) {
        mkdir($profileFolder);
    }
    if (!file_exists($cardFolder)) {
        mkdir($cardFolder);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $profileFolder = "../images/profile_pictures/";
    $cardFolder = "../images/card_pictures/";

    createImageFoldersIfNotExists($profileFolder, $cardFolder);


    $profileExtension = pathinfo($_FILES['personal_pic']['name'], PATHINFO_EXTENSION);
    $cardExtension = pathinfo($_FILES['id_pic']['name'], PATHINFO_EXTENSION);


    $randomString = uniqid(mt_rand(), true);


    $profilePicture = $_POST['first_name'] . '-' . $_POST['last_name'] . '-' . $randomString . '.' . $profileExtension;
    $cardPicture = $_POST['first_name'] . '-' . $_POST['last_name'] . '-' . $randomString . '.' . $cardExtension;

    $profileTarget = $profileFolder . basename($profilePicture);
    $cardTarget = $cardFolder . basename($cardPicture);

    move_uploaded_file($_FILES['personal_pic']['tmp_name'], $profileTarget);
    move_uploaded_file($_FILES['id_pic']['tmp_name'], $cardTarget);

    $name = $_POST['first_name'];
    $fathername = $_POST['middle_name'];
    $familyname = $_POST['last_name'];
    $commission = 'مفوضيـة البقاع';
    $regiment = 'خالد بن الوليد';
    $band = 'الجوالة';
    $birthdate = $_POST['birthday'];
    $nationality = $_POST['nationality'];
    $address = $_POST['address'];
    $job = $_POST['job'];
    $dadjob = $_POST['hoh_job'];
    $phonenumber = $_POST['phone_number'];
    $dadphonenumber = $_POST['hoh_phone_number'];
    $bloodtype = $_POST['blood_type'];
    $educationallevel = $_POST['education'];
    $dateofjoining = $_POST['affiliation_date'];
    $scoutrank = $_POST['scout_rank_id'];


    $stmt = mysqli_prepare($con, "INSERT INTO profiles (userid, profilepicture, cardpicture, name, fathername, familyname, commission, regiment, band, birthdate, nationality, address, job, dadjob, phonenumber, dadphonenumber, bloodtype, educationallevel, dateofjoining, scoutrank) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    session_start();
    $userid = $_SESSION['userid'];
    mysqli_stmt_bind_param($stmt, 'isssssssssssssssssss', $userid, $profilePicture, $cardPicture, $name, $fathername, $familyname, $commission, $regiment, $band, $birthdate, $nationality, $address, $job, $dadjob, $phonenumber, $dadphonenumber, $bloodtype, $educationallevel, $dateofjoining, $scoutrank);

    if (mysqli_stmt_execute($stmt)) {
        echo "Record added successfully";
    } else {
        echo "Error adding record: " . mysqli_error($con);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($con);
