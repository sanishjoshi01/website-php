<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <form action="index.php" method="post">
        <label for="username">Username: </label><br>
        <input type="text" name="username"><br>
        <label for="password">Password: </label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in"><br>
    </form>
</body>

</html>
<?php
//isset() - returns true if a variable is declared and not null
//empty() - returns true if a variable is not declared, false, null, "" (empty)

//behind the scenes of the post super global variable as it has key and value pairs.
foreach ($_POST as $key => $value) {
    echo "{$key} = {$value} <br>";
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "Username is missing";
    } elseif (empty($password)) {
        echo "Password is missing";
    } else {
        echo "hello {$username}";
    }
}
?>