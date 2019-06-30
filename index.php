<?php
  // #3
  // echo 'Hello';
  // #4
  $name = 'Yoshi';
  $age = '30';
  define('NAME', 'Yoshi');
  echo "<br>";

  // #5
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
  // #6 Numbers
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
  echo "<br>";

  // #7 indexed arrays
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
  //print_r($popped);


  // #9 Loops
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
</ul>
</body>
</html>