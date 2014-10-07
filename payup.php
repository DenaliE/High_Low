<?php

$days_of_the_week = [
'Sunday',
'Monday',
'Tuesday',
'Wednesday',
'Thursday',
'Friday',
'Saturday'
];

//set day to 0 (Sunday)
$today = 0; // Sunday
$money = 0; // amount of money

//loop until you have $100
while($money < 100) {
	//check if it's Friday
	if ($today == 7) {
		$today = 0;
	}

	if($days_of_the_week[$today] == 'Friday') {
		$money += 20;
	}

	echo $days_of_the_week[$today] . "\n";
	echo $money . "\n";
	echo "------------------" . "\n";
	
	$today++;
}

