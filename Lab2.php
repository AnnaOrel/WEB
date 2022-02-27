<?php

echo " 1 ";

/* Imagine a lot of code here */

$very_bad_unclear_name = "15 chicken wings";

// Write your code here:

$order = &$very_bad_unclear_name;

$order .= ", would you like sauce?";

echo $very_bad_unclear_name;

// Don't change the line below

echo "\nYour order is: $very_bad_unclear_name.";

echo "\n 2 \n";

$first_number = 57;
echo $first_number;

echo "\n";

$second_number = 374.325;
echo "\n" . (32 - 20);

$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month;

echo "\n 11 \n";

$num_languages = 4;
$months = 11;

$days = $months * 16;

$days_per_language = $days / $num_languages;

echo $days_per_language;
?>
