<?php

$username = "John Doe";
$phone = "123-456-7890";


// $username = strtolower($username);
// $username = strtoupper($username);
// $username = trim($username);

// $username = str_pad($username, 10, 0);
// John Doe00

// $phone = str_replace("-", "", $phone);
//1234567890

// $username = strrev($username);
// $username = str_shuffle($username);
// $username = strcmp($username, "John Doe");

// $username = strlen($username);
// $username = strpos($username, " ");

// $firstname = substr($username, 0, 4);
// $lastname = substr($username, 4);
// $fullname = explode(" ", $username);

// foreach ($fullname as $name) {
//     echo  $name . "<br>";
// }
$username2 = array("John", "Doe", "Great");
$username2 = implode("-", $username2);

echo $username2;
