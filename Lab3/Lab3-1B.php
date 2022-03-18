<?php
    $find_it = "/(\d)+/";
    $str = "a1b2c3";
    echo preg_replace_callback($find_it, fn($matches) => intval($matches[0]) ** 2, $str);
?>

