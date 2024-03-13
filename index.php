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
        username: <br>
        <input type="text" name="username"><br>
        age: <br>
        <input type="text" name="age"><br>
        email: <br>
        <input type="text" name="email"><br>
        <input type="submit" name="submit"><br>
    </form>
</body>

</html>

<?php

if (isset($_POST["submit"])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if (empty($email)) {
        echo "not valid number/email";
    } else {
        echo "Email: {$email}";
    }
}
?>