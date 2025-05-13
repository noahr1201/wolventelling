<?php
$db_hostname = "localhost";
$db_username = "089526";
$db_password = "Wolven89526";
$db_database = "089526_wolventelling";

$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

if (mysqli_connect_errno()) {
    echo "Kan geen connectie maken: " . mysqli_connect_error();
    exit();
}