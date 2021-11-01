<!DOCTYPE HTML>
<html lang="bg" lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h1>Connection</h1>
  <?php
  $conn = mysqli_connect('localhost', 'root', '', 'reciepts');
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } else {
    echo "Connected successfully !";
  }
  ?>
  <h2>Insert, Select</h2>
  <?php
  $insert_query = "INSERT INTO `products`(`name`) VALUES ('kkk');INSERT INTO `products`(`name`) VALUES ('kkk')";

  $result = mysqli_query($conn, $insert_query);
  if ($result) {
    echo 'You inserted row in DB successfully!';
  } else {
    echo "Try again!";
  }
  echo'<br>';
  echo'<br>';
  $select_query = 'SELECT * FROM `products` WHERE 1';
  $result = mysqli_query($conn, $select_query);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
      echo '<br>' . "Product id, product name and product image are: " . '<br>';
      var_dump($row);
      echo '<br>';


    }
  }
  echo'<br>';
  echo'<br>';
  $select_query = "SELECT * FROM products WHERE 1";
  $results = mysqli_query($conn, $select_query);
  if (mysqli_num_rows($results) > 0) {
    while($row = mysqli_fetch_assoc($results)){
      echo '<br>' . "Product type id and name are: " . '<br>';
      var_dump($row);
    }
  }
  echo'<br>';
  echo'<br>';
  ?>
  <h3>Form</h3>
  <form method="post" action="">
    <p>Enter product name</p>
    <input type="text" name="name">
    <input type="submit" name="submit" value="save">
  </form>
  <?php
  if( isset($_POST['name'])){
    $name = $_POST['name'];
    $insert_query = "INSERT INTO `products`(`name`) VALUES ('$name')";
  }
  ?>
  <form method="post" action="">
    <p>Enter product name</p>
    <input type="text" name="type">
    <input type="submit" name="submit" value="save">
  </form>
  <?php
  if( isset($_POST['type'])){
    $type = $_POST['type'];
    $insert_query = "INSERT INTO `product_types`(`type`) VALUES ('$type')";
  }
  ?>
  <h4>Delete, Update</h4>
  <?php
  echo'<br>';
  $delete_query = 'DELETE FROM `products` WHERE `name` = "m"';
  $results = mysqli_query($conn, $delete_query);
  if ($results) {
    echo 'You delete row in DB successfully!';
  } else {
    echo "Try again!";
  }

  echo'<br>';
  echo'<br>';
  ?>
  <?php
  $update_query = "UPDATE `products` SET `name`='Yoghurt' WHERE `name`='hgourt'";
  $results = mysqli_query($conn, $update_query);
  if ($results) {
    echo 'You update row in DB successfully!';
  } else {
    echo "Try again!";
  }
  echo'<br>';
  echo'<br>';
  ?>
</body>
</html>
