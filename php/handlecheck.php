<?php


$roverid = isset($_POST['roverid']) ? $_POST['roverid'] : null;
$demanid = isset($_POST['demandid']) ? $_POST['demandid'] : null;
$checked = isset($_POST['checked']) ? $_POST['checked'] : "del";

if ($roverid !== null && $demanid !== null) {

    session_start();
    $leaderid = $_SESSION['userid'];

    include "connect.php";

    $stmt = "";
    if ($checked === "ins") {
        $stmt = mysqli_prepare($con, "INSERT INTO expired (userid, demandid, leaderid, finished) VALUES (?, ?, ?, 1)");
        mysqli_stmt_bind_param($stmt, 'iii', $roverid, $demanid, $leaderid);
    } else if ($checked === "del") {
        $stmt = mysqli_prepare($con, "DELETE FROM expired WHERE userid = ? AND demandid = ?");
        mysqli_stmt_bind_param($stmt, 'ii', $roverid, $demanid);
    }

    $result = mysqli_stmt_execute($stmt);

    if (!$result) {
        http_response_code(500);
        $response = array('message' => 'Failed to execute database query', 'success' => false);
        echo json_encode($response);
    } else {

        $response = array('message' => 'Demand updated successfully', 'success' => true);

        if ($checked === "ins") {
            $last_id = mysqli_insert_id($con);
            $stmt = mysqli_prepare($con, "SELECT date FROM expired WHERE id=?");
            mysqli_stmt_bind_param($stmt, 'i', $last_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $date);
            mysqli_stmt_fetch($stmt);
            $response['date'] = $date;
            
            mysqli_stmt_close($stmt);

            $stmt = mysqli_prepare($con, "SELECT name, familyname FROM profiles WHERE id=?");
            mysqli_stmt_bind_param($stmt, 'i', $leaderid);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $name, $familyname);
            mysqli_stmt_fetch($stmt);
            $response['leader']= $name;

        } else if ($checked === "del") {
            $response['date']="";
            $response['leader']="";
        }

        echo json_encode($response);
    }

    mysqli_stmt_close($stmt);
} else {
    http_response_code(400); // Bad Request
    echo json_encode(array('error' => 'Invalid data received'));
    print_r($_POST);
}
