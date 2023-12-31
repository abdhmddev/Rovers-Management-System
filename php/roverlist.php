<?php
include "connect.php";

$query = "SELECT id, name, familyname, scoutrank FROM profiles WHERE scoutrank <> 'قائد/شيخ العشيرة'";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<table class='table table-hover'>";
    echo "<tr><th>الإسم</th>
    <th>الرتبة</th>
    <th>المطاليب</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        // echo "<td><a href='another_page.php?name={$row['name']}&family_name={$row['familyname']}'></a></td>";
        echo "<td>{$row['name']} {$row['familyname']}</td>";
        echo "<td>{$row['scoutrank']}</td>";
        echo "<td><a style='width: 100%; color: #fff !important; background-color: var(--main-color); padding:5px; border-radius:5px;' href='/rms/roverdashboard.php?id={$row['id']}&filter=1'>المطاليب</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found";
}

mysqli_close($con);


?>