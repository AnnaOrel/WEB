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
	
	echo "\n 16 \n";
	
	function increaseEnthusiasm(string $string): string
	{
		return $string . "!"
	}
	
	echo increaseEnthusiasm("OH MY GOD HOW DO I DO THIS") . "\n";
	
	function repeatThreeTimes(string $string): string
	{
		return $string . $string . $string;
	}
	
	echo repeatThreeTimes("I'M SCARED ") . "\n";
	
	echo increaseEnthusiasm(repeatThreeTimes("AAA")) . "\n";
	
	function cut(string $string, int $first = 10): string
	{
		$k = min(strlen($string), $first);
		$result = "";
		for ($i = 0; $i < $k; $i++)
			$result .= $string[$i];
		return $result;
	}
	
	echo "cut(kakorrhaphiraphobia) = " . cut("kakorraphiraphobia") . "\n";
	echo "cut(kakorrhaphiraphobia, 5) = " . cut("kakorraphiraphobia", 5) . "\n";
	
	function recurseArray(array $arr, int $i = 0)
	{
		if ($i == count($arr))
			return;
		echo $arr[$i] . " ";
		recurseArray($arr, $i + 1);
		if ($i == 0)
			echo "\n";
	}
	
	$array = [6, 8, 5, 7, 8, 9, 0];
	recurseArray($array);
	
	function digitSum(int $num)
	{
		$sum = 0;
		while ($num > 0)
		{
			$sum += $num % 10;
			$num /= 10;
		}
		if ($sum > 9)
			return digitSum($sum);
		else
			return $sum;
	}
	
	echo "\n" . digitSum(635) . "\n";
	
	echo "\n 17 \n";
	
	$size = 7;
	$array = ["x"];
	for ($i = 0; $i < $size; $i++)
		$array[$i] = $array[$i - 1] . "x";
	
	function arrayPrint(array $array)
	{
		foreach ($array as $element)
			echo $element . " ";
		echo "\n";
	}
	
	arrayPrint($array);
	
	function arrayFill(string $string, int $num): array
	{
		$array = [];
		for ($i = 0; $i < $num; $i++)
			$array[$i] = $string;
		return $array;
	}
	
	arrayPrint(arrayFill("x", 5));
	echo "\n"
	
	$array = [[4, 7], [6, 5, 3, 8], [1, 9], [2]];
	$sum = 0;
	foreach($array as $element)
		$sum += array_sum($element);
	echo $sum . "\n";
	
	$array = [];
	$element = 1
	for ($i = 0; $i < 3; $i++)
		for ($j = 0; $j < 3; $j++)
			$array[$i][$j] = $element++;
	arrayPrint($array);
	echo "\n";
	
	$array = [2, 5, 3, 9];
	$result = $array[0] * $array[1] + $array[2] * $array[3];
	echo $result . "\n";
	
	$user = ['Name' => 'Орел', 'Surname' => 'Анна', 'Patronymic' => 'Кузьминична', 27, 07, 2002, 13];
    echo $user['Surname'] . " " . $user['Name'] . " " . $user['Pаtronymic'] . "\n";
	
	$date = ['Year' => '2022', 'Month' => '03', 'Day' => '17'];
    echo "{$date['Year']}-{$date['Month']}-{$date['Day']}\n";
	
	$array = ['a', 'b', 'c', 'd', 'e'];
    $size = count($array);
    echo $size . "\n";
	
	echo $array[sizeof($array) - 1] . "\n";
    echo $array[sizeof($array) - 2] . "\n";
?>
