<?php

$foods = array("apple", "banana", "orange", "lemon");

$foods[0] = "pineapple";
array_push($foods, "coconut");
array_pop($foods);
array_shift($foods);
array_unshift($foods, "pineapple");
echo count($foods) . "<br>";

$reversed_array = array_reverse($foods);


foreach ($foods as $food) {
    echo $food . "<br>";
}
