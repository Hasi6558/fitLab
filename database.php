<?php

$server = "localhost";
$username = "root";
$password = "Hasindu1234H";
$db_name = "dbfitlab";

$conn = mysqli_connect($server, $username, $password, $db_name);

if (!$conn) {
    die("Database connection not successful: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS user (
    uid INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    first_name VARCHAR(45),
    last_name VARCHAR(45),
    gender VARCHAR(45),
    email VARCHAR(45),
    password VARCHAR(45),
    address_line1 VARCHAR(45),
    postal_code VARCHAR(45),
    no_of_sessions INT
)";



if (mysqli_query($conn, $sql)) {
    return true;
} else {
    echo "Table creation unsuccessful: " . mysqli_error($conn);
}


?>
