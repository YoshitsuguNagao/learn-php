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

  // #36 Sessions
  if(isset($_POST['submit'])) {
    session_start();

    $_SESSION['name'] = $_POST['name'];

    // echo $_SESSION['name'];
    // header('Location: index.php');
  }

  // #39 file system
  // $quotes = readfile("readme.txt");
  // echo $quotes;

  // $file = 'readme.txt';
  // if(file_exists($file)){
  //   // read file
  //   echo readfile($file) . '<br>';
  //   // copy file
  //   copy($file, 'quotes.txt');
  //   // absolute path
  //   echo realpath($file) . '<br>';
  //   // // file size
  //   echo filesize($file) . '<br>';
  //   // // rename the file
  //   rename($file, 'test.txt');
  // } else {
  //   echo 'file does not exist';
  // }
  // // make directory
  // mkdir('quotes');

  // $file = 'quotes.txt';
  // // opening a file for reading
  // $handle = fopen($file, 'r');
  // // read the file
  // echo fread($handle, filesize($file));
  // echo fread($handle, 112);
  // // read a single line
  // echo fgets($handle);
  // echo fgets($handle);
  // // read a single character
  // echo fgetc($handle);
  // echo fgetc($handle);
  // $handle = fopen($file, 'r+');
  // $handle = fopen($file, 'a+');
  // // writing to a file
  // fwrite($handle, "\nEverything popular is wrong.");
  // fclose($file);
  // unlink($file);
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
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="name">
    <input type="submit" name="submit" value="submit">
  </form>
</body>
</html>