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