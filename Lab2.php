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
	echo "\n" . $last_month - $this_month;

	echo "\n 11 \n";

	$num_languages = 4;
	$months = 11;

	$days = $months * 16;

	$days_per_language = $days / $num_languages;

	echo $days_per_language;

	echo "\n 12 \n";

	echo 8 ** 2;

	echo "\n 13 \n";

	$my_num = 546;

	$answer = $my_num;

	$answer += 2;

	$answer *= 2;

	$answer -= 2;

	$answer /= 2;

	$answer -= $my_num;
	echo $answer;

	echo "\n 14 \n";

	$a = 10;
	$b = 3;
	echo $a % $b;

	$a = 10;
	$b = 3;
	if ($a % $b == 0)
		echo "\nДелится, " . $a . "/" . $b . "=" . $a / $b . "\n";
	else
		echo "\nДелится с остатком " . $a % $b . "\n";

	$st = pow(2, 10);
	echo $st . "\n";

	$array = [4, 2, 5, 19, 13, 0, 10]; 
	$sum = 0;
	foreach ($array as $value)
	{
		$sum += $value ** 2;
	}
	echo sqrt($sum) . "\n";

	echo round(sqrt(379)) . "\n";
	echo round(sqrt(379), 1) . "\n";
	echo round(sqrt(379), 2) . "\n";

	$array = array("Floor" => floor(sqrt(587)), "Ceil" => ceil(sqrt(587)));
	foreach ($array as $name => $number)
	{
		echo $name . "=" . $number . "\n";
	}
	
	echo min(4, -2, 5, 19, -130, 0, 10) . "\n";
	echo max(4, -2, 5, 19, -130, 0, 10) . "\n";
	
	echo rand(1, 100) . "\n";
	
	for ($i = 0; $i < 10; $i++)
	{
		$array[$i] = rand();
	}
	echo $array . "\n";
	
	$a = rand();
	$b = rand();
	echo abs($a - $b) . "\n";
	
	$array = [1, 2, -1, -2, 3, -3];
	foreach ($array as $value)
	{
		$value = abs($value);
	}
	echo $array . "\n"
	
	$num = rand();
	$divisors = [];
	for ($i = 1; $i <= $num; $i++)
	{
		if ($num % $i == 0)
			array_push($divisors, $i);
	}
	echo $divisors . "\n";
	
	$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	$sum = 0;
	$i = 0;
	while ($sum <= 10)
	{
		$sum += $array[$i];
		$i++;
	}
	echo $i . "\n";
	
	echo "\n 15 \n";
	
	function printStringReturnNumber(): int
	{
		echo "Srting";
		return 6538;
	}
	
	$my_num = printStringReturnNumber();
	echo $my_num;
	
?>
