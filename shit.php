<?php
include "php/connect.php";

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

// echo json_encode($data);

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
        echo "<td class='check'><input type='checkbox' name='demand[]' value='$id'></td>";
        echo "<td>$name</td>";
        echo '</tr>';
    }

    echo "</tbody>
        </table>";
}
