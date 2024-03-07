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
        <label for="quantity">Quantity:</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit">
    </form>
</body>

</html>

<?php

$item = "pizza";
$price = 4;
$quantity = $_POST["quantity"];

$total = null;

echo "You have ordered {$quantity}x of {$item}s.<br>";
$total = $quantity * $price;
echo "Your total is \${$total}.";

?>