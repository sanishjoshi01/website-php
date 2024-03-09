<?php

//switch - replacement to using many elseif statements
// more efficient less code to writ

$date = date("l");
$date = "Friday";

switch ($date) {
    case "Sunday":
        echo "I hate Sundays";
        break;
    case "Monday":
        echo "Mon Mon day is today";
        break;
    case "Tuesday":
        echo "Its Taco Tuesday";
        break;
    case "Wednesday":
        echo "half day of the week";
        break;
    case "Thursday":
        echo "Its almost the weekend";
        break;
    case "Friday":
        echo "day before the weekend";
        break;
    case "Saturday":
        echo "Finally the weekend";
        break;
    default:
        echo "not a valid date";
}