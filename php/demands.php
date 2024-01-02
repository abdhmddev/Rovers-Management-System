<?php
include "connect.php";

$data = [];

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



foreach ($data as $type) {
    echo '<table class="table">
            <thead>
                <tr>
                    <th colspan="3">' . $type[0]['type'] .'</th>
                </tr>
            </thead>
            <tbody>';
    foreach ($type as $demand) {
        $id = $demand['id'];
        $name = $demand['name'];
        $type = $demand['type'];
        echo '<tr scope="row">';
        if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == "قائد/شيخ العشيرة"){
            echo "<td class='check'><input type='checkbox' name='demand[]' class='demand-checkbox' value='$id'></td>";
        }else{
            echo "<td class='check'><input type='checkbox' disabled name='demand[]' class='demand-checkbox' value='$id'></td>";
        }
        echo "<td>$name</td>";
        echo "<td id='d$id'></td>";
        echo "<td id='n$id'></td>";
        echo '</tr>';
    }
    echo "</tbody>
        </table>";
}


