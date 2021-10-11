<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <center>
    <?php
      function printHelloWorld($arg1, $arg2) {
        echo "<$arg1 style='color:" . $arg2 . "'>";
        echo 'Hello world!';
        echo '</$arg1>';
      }

      $color = "red";
      $tag = 'h1';
      printHelloWorld($tag, $color);
      $var = printHelloWorld('h2','green');
      echo $var;
      echo printHelloWorld('h2', 'green');
    ?>
  </center>
</body>
</html>
