<?php
include "php/connect.php";



$filter = "";
if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];
}

$result = mysqli_query($con, "SELECT * FROM demands where stage='$filter'");
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[$row['type']][] = $row;
    }
}

// echo json_encode($data);

foreach ($data as $type) {
    echo "</br> </br>";
    echo "<center>";
    echo "<table border='2' width='50%'>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Type</th>";
    echo "<th>Action</th>";

    foreach ($type as $row) {

        $id = $row['id'];
        $name = $row['name'];
        $type = $row['type'];
        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$name</td>";
        echo "<td>$type</td>";
        echo "<td><input type='checkbox' name='demand[]' value='$id'></td>"; // Checkbox
        echo "</tr>";
    }

    echo "</table>";
    echo "</center>";
}

// if ($result) {
//     while ($row = mysqli_fetch_object($result)) {
//         printf($row . "\n");

//     }
// }
