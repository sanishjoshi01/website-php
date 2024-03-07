<?php

$food = "pizza";

$quantity = 100;

$price = 4.99;

$total = null;

echo "Your order of {$quantity}x {$food}s is ready<br>";

$total = $quantity * $price;

echo "Total price is: \${$total}";
