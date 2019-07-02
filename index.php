<?php
  // #3
  // echo 'Hello';
  // #4
  $name = 'Yoshi';
  $age = '30';
  define('NAME', 'Yoshi');
  echo "<br>";

  // #5
  echo "<h2>String</h2><br>";
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

  // #6 Numbers
  echo "<br><h2>Numbers</h2><br>";
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

  // #7 indexed arrays
  echo "<br><h2>Indexed arrays</h2><br>";
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

  // #8 multidimensional array
  echo "<br><h2>Multidimensional arrays</h2><br>";
  $blogs = [
    ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem'],
    ['title' => 'mariokart cheats', 'author' => 'toad', 'content' => 'lorem'],
    ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem']
  ];
  //print_r($blogs);
  //print_r($blogs[2]);
  //echo $blogs[1]['title'];
  //echo count($blogs);
  $blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem'];
  //print_r($blogs);
  $popped = array_pop($blogs);
  print_r($popped);


  // #9 Loops
  echo "<br><h2>Loops</h2><br>";
    $ninjas = ['shaun', 'ryu', 'yoshi'];
  // for($i = 0; $i < count($ninjas); $i++){
  //   echo $ninjas[$i] . '<br />';
  // }
  // foreach($ninjas as $ninja){
  //   echo $ninja . ' <br/>';
  // }
  $products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
  ];
  // foreach($products as $product){
  //   echo $product['name'] .' - '. $product['price'];
  //   echo '<br />';
  // }
  $i = 0;
  while($i < count($products)){
    echo $products[$i]['name'];
    echo '<br />';
    $i++;
  }

  // #10 comparisons & booleans (true or false)
  echo "<br><h2>Booleans</h2><br>";
  //echo true // echo's "1"
  //echo false // echo's ""
  // numbers
  //echo 5 < 10;
  //echo 5 > 10;
  //echo 5 == 10;
  //echo 10 == 10;
  //echo 5 != 10;
  // echo 5 <= 5;
  // echo 5 >= 5;
  // strings
  //echo 'shaun' < 'yoshi';
  //echo 'shaun' > 'yoshi';
  //echo 'shaun' > 'Shaun';
  //echo 'mario' == 'mario';
  //echo 'mario' == 'Mario';
  // loose vs strict equal comparison
  //echo 5 == '5';
  //echo 5 === '5';
  //echo 5 === 5;
  //echo true == 1;
  //echo false == "";
  //echo true === 1;

  // #11,12 Conditional statements
  echo "<br><h2>Conditional statements</h2><br>";
  // $price = 20;
  // if($price < 30){
  //   echo 'if condition met';
  // } elseif($price === 20) {
  //   echo 'elseif condition met';
  // } else {
  //   echo 'condition not met';
  // }
  foreach($products as $product){
    // if($product['price'] < 15 && $product['price'] > 2){
    //   echo $product['name'] . '<br />';
    // }
    // if($product['price'] > 20 || $product['price'] < 10){
    //   echo $product['name'] . '<br />';
    // }
    if($product['name'] === 'lightning bolt'){
      break;
    }
    if($product['price'] > 15){
      continue;
    }
    echo $product['name'] . '<br />';
  }

  // #13 functions
  echo "<br><h2>Functions</h2><br>";
  // function sayHello($name = 'shaun', $time = 'morning'){
  //   echo "Good $time, $name";
  // }
  // sayHello();
  // sayHello('mario');
  // sayHello('yoshi', 'night');
  echo "<br>";
  function formatProduct($product){
    // echo "{$product['name']} costs £{$product['price']} to buy <br />";
    return "The {$product['name']} costs £{$product['price']} to buy <br />";
  }
  // formatProduct(['name' => 'gold star', 'price' => 20]);
  $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
  echo $formatted;

  // #14 Variable scope
  echo "<br><h2>Variable scope</h2><br>";
  // local vars
  function myFunc(){
    $price = 10;
    echo $price;
  }
  // myFunc();
  // echo $price;
  function myFuncTwo($age){
    echo $age;
  }
  myFuncTwo(25);
  // echo $age;
  // global variables
  $name = 'mario';
  function sayHello(){
    global $name;
    $name = 'yoshi';
    echo "hello $name ";
  }
  // sayHello();
  // echo $name;
  function sayBye(&$name){
    $name = 'wario';
    echo "bye $name ";
  }
  sayBye($name);
  echo $name;

  // #15 Include & Require
  echo "<br><h2>Include & Require</h2><br>";
  include('./ninjas.php');
  require('./ninjas.php');
  include 'ninjas.php';
  require 'ninjas.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<h1><?php echo 'hello';?></h1>

<div><?php echo NAME; ?></div>
<div><?php echo $name; ?></div>
<div><?php echo $age; ?></div>
<h1>Products</h1>
<ul>
  <?php foreach($products as $product){ ?>
    <h3><?php echo $product['name']; ?></h3>
    <p>£<?php echo $product['price']; ?></p>
  <?php } ?>
  <?php include('content.php'); ?>
  <?php include('content.php'); ?>
</ul>
</body>
</html>