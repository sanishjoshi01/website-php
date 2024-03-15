<?php
include("database.php");

$username = "Sandy";
$password = "Sanish123";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password)
        VALUES ('$username','$hash')";

try {
    mysqli_query($conn, $sql);
    echo "Registered";
} catch (mysqli_sql_exception) {
    echo "Could not register or user already exists";
}

mysqli_close($conn);
