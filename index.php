<?php

//Arithmetic Operator

$x = 10;
$y = 2;
$z = null;

// +
$z = $x + $y;
echo $z, "<br>";        //12


// -
$z = $x - $y;
echo $z, "<br>";        //

// *
$z = $x * $y;
echo $z, "<br>";        //20


// /
$z = $x / $y;
echo $z, "<br>";        //5


// **
$z = $x ** $y;
echo $z, "<br>";        //100


// %
$z = $x % $y;
echo $z, "<br>";        //0

//Increment Operator | ++ 

$counter = 0;

$counter++;
echo $counter, "<br>";

//Decrement Operator | --

$counter--;
echo $counter, "<br>";

//Operator Precedence
//  () - parenthesis
//  **
//  * / %
// + -