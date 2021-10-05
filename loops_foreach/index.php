<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <center>
    <title>Loops Foreach While</title>
  </head>
  <body>
    <h3>This is example for foreach <br></h3>
    <?php
    $arr = [
      'John Smith' => '+1-555-8976',
      'Lisa Smith' => '+1-555-1234',
      'Sam Doe' => '+1-555-5030',
           ];
           print_r($arr);
    ?>
<h3>This is another example for foreach <br></h3>
    <?php

      $num = 1;
        $key = [
          '+1-555-5030',
        ];
      foreach($key as $value){
      echo 'Phone number No'. $num++ .'is' . $value;
      }
      foreach($key as $phone){
      echo 'Phone number No'. $num .'is' . $phone;
      $num++;
      }
    ?>
    <h3>While example  <br></h3>
    <?php
    $x = 1;
    while($x < 6){
    echo ' <br> The number is ' .
    $x;
    $x++;
    }
    ?>
  </center>

  </body>
</html>
