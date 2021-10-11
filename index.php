<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <center>
    <?php
    function print_hello_world($arg1, $arg2) {
      echo "<$arg1 style='color:" . $arg2 . "'>";
      echo 'Hello world!';
      echo '</$arg1>';
    }
    $tag = 'h1';
    $color = "red";
    print_hello_world($tag, $color);
    $var = print_hello_world('h2','green');
    echo $var;
    echo print_hello_world('h2', 'green');
    ?>
  </center>
</body>
</html>
