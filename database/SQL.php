<!DOCTYPE HTML>
<html lang="bg" lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h1>Connection</h1>
  <?php

  $db = mysqli_connect("localhost","root","","testDB");

  if(!$db)
  {
      die("Connection failed: " . mysqli_connect_error());
  }

  ?>
  <?php
  include "db_conn.php";

  if(isset($_POST['submit']))
  {
      $fullname = $_POST['fullname'];
      $age = $_POST['age'];

      $insert = mysqli_query($db,"INSERT INTO `tblemp`(`fullname`, `age`) VALUES ('$fullname','$age')");

      if(!$insert)
      {
          echo mysqli_error();
      }
      else
      {
          echo "Records added successfully.";
      }
  }

  mysqli_close($db);
  ?>

  <h3>Fill the Form</h3>

  <form method="POST">
    Full Name : <input type="text" name="fullname" placeholder="Enter Full Name" Required>
    <br/>
    Age : <input type="text" name="age" placeholder="Enter Age" Required>
    <br/>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
