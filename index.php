<?php

setcookie("fav_food", "burger", time() + (86500 * 2), "/");
setcookie("fav_drinks", "sprite", time() + (86500 * 2), "/");
setcookie("fav_dessert", "ice cream", time() + (86500 * 2), "/");


foreach ($_COOKIE as $key => $value) {
    echo "{$key} = {$value} <br>";
}