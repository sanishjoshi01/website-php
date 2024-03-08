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
        <label for="radius">radius:</label><br>
        <input type="text" name="radius"><br>
        <input type="submit" value="calculate">
    </form>
</body>

</html>

<?php
$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);

$area = round(pi() * pow($radius, 2), 2);

$volume = round(4 / 3 * pi() * pow($radius, 3), 2);

echo "Circumference: {$circumference}<br>";
echo "Area: {$area}<br>";
echo "Volume: {$volume}<br>";
?>