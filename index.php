<?php
function greetings($name, $age)
{
    echo "Hello {$name} <br>";
    echo "You are {$age} years old <br>";
}

greetings("John", 23);

function hypotenuse($a, $b)
{
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}

echo hypotenuse(3, 4);
