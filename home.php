<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    hello <?php echo $_SESSION["username"]; ?> <br>
    This is your home page

    <form action="home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>

</html>

<?php
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
}
?>