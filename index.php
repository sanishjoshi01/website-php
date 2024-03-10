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
        <label for="number">Enter a number to count to: </label>
        <input type="text" name="number">
        <input type="submit" value="submit">
    </form>
</body>

</html>

<?php

//for loop repeat the code for certain amount of times

$counter = $_POST["number"];

for ($i = 1; $i <= $counter; $i++) {
    echo $i, "<br>";
}
