<?php
  // echo 'Hello';
  $name = 'Yoshi';
  $age = '30';
  define('NAME', 'Yoshi');
  $stringOne = 'my email is';
  $stringTwo = 'mario123@gogole.com';
  // echo $stringOne . $stringTwo;
  $name = 'mario';
	// concatenation
	echo 'Hey, my name is '.$name;
	// variable interpolation
	echo "Hey, my name is $name";
	// escaping characters
	echo "the ninja screamed \"whaaa\"";
	echo 'the ninja scream "whaaa"';
	// get single characters
	echo $name[1];
	// string functions
	echo strlen($name);
	echo strtoupper($name);
	echo strtolower($name);
  echo str_replace('m', 'w', $name);

  echo "<br>";
  //Numbers
  $radius = 25;
	$pi = 3.14;
	// basic operators - *, /, +, -, ^
	echo $pi * $radius ** 2;
	// order of operation (B I D M A S)
  echo 2 * (4 + 5) / 3;
	// increment & decrement operators
	echo $radius++;
	echo $pi--;
	// shorthand operations
	$age = 20;
	$age += 10; // age becomes 30
	$age -= 5; // age becomes 25
	$age *= 2; // age becomes 50
	echo $age;
	// number functions
	echo floor($pi);
	echo ceil($pi);
  echo pi();

  	// indexed arrays
	$peopleOne = ['shaun', 'crystal', 'ryu'];
	//echo $peopleOne[1];
	$peopleTwo = array('ken', 'chun-li');
	//echo $peopleTwo[1];
	$ages = [20, 30, 40, 50];
	//print_r($ages);
	$ages[1] = 25;
	//print_r($ages);
	$ages[] = 10;
	array_push($ages, 70);
	//print_r($ages);
	//echo array_pop($ages);
	//print_r($ages);
  //echo count($ages);
  $peopleThree = array_merge($peopleOne, $peopleTwo);
	//print_r($peopleThree);
	// associative array (key & value pairs)
	$ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
	//echo $ninjasOne['mario'];
	//print_r($ninjasOne);
	$ninjasTwo = array('bowser' => 'green', 'peach' => 'yellow');
	//print_r($ninjasTwo);
	$ninjasTwo['toad'] = 'pink';
	//echo count($ninjasTwo);
	$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
	print_r($ninjasThree);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My first php file</title>
</head>
<body>
  <h1><?php echo 'hello';?></h1>

  <div><?php echo NAME; ?></div>
  <div><?php echo $name; ?></div>
  <div><?php echo $age; ?></div>
</body>
</html>