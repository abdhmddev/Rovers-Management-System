<?php

define("db_SERVER", "localhost");
define("db_USERNAME", "root");
define("db_PASSWORD", "");
define("db_DBNAME", "Rovers-Management-System");

$con = mysqli_connect(db_SERVER, db_USERNAME, db_PASSWORD, db_DBNAME);

if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}
?>