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
        <label for="name">Enter a country: </label>
        <input type="text" name="name">
        <input type="submit" value="submit">
    </form>
</body>

</html>
<?php

//associative array - array made of key => value pairs
//countries => capitals
//id => username
//item => price

$countries = array(
    "USA" => "Washington DC",
    "Nepal" => "Kathmandu",
    "India" => "New Delhi",
    "South Korea" => "Seoul"
);

// $countries["USA"] = "DC";
// $countries["Japan"] = "Kotyo";
// array_pop($countries);
// array_shift($countries);

// $keys = array_keys($countries);
// $values = array_values($countries);

// $countries = array_flip($countries);
// $countries = array_reverse($countries);

$input = $countries[$_POST["name"]];
echo $input;
