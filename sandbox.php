<?php

  // #34 ternary operators
  $score = 50;
  // if($score > 40){
  // echo 'high score!';
  // } else {
  // echo 'low score!';
  // }
  // echo $score > 40 ? 'high score!' : 'low score!';

  // #35 superglobals
  //$_GET['name'], $_POST['name']
  echo $_SERVER['SERVER_NAME'] . '<br />';
  echo $_SERVER['REQUEST_METHOD'] . '<br />';
  echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
  echo $_SERVER['PHP_SELF'] . '<br />';

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
  <h2><?php echo $score > 40 ? 'high score!' : 'low score!'; ?></h2>
</body>
</html>