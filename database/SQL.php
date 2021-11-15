<!DOCTYPE HTML>
<html lang="bg" lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
</head>
<body>
  <?php

  $db = mysqli_connect("localhost","root","","shop_v1");

  if(!$db)
  {
    die("Connection failed: " . mysqli_connect_error());
  }

  if(isset($_POST['cart_id']))
  {
    $product_name = $_POST['product_name'];
    $cart_id = $_POST['cart_id'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $insert = mysqli_query($db,"INSERT INTO `products`(`name`,`cart_id`,`quantity`,`price`) VALUES ('$product_name','$cart_id','$quantity','$price')");

    if($insert){
      echo "Records added successfully.";
    }
  }

  ?>

  <h3>Product</h3>

  <form method="POST">
    Product Name : <input type="text" name="product name" placeholder="Enter product name" required>
    <select>
   <option disabled selected>-- Select product --</option>
   <?php
       $records = mysqli_query($db, "SELECT `cart_id` From `products`");

       while($db = mysqli_fetch_array($records))
       {
           echo "<option value='". $db['cart_id'] ."'>" .$db['cart_id'] ."</option>";
       }
   ?>
 </select>
  <input type="number " name="quantity" placeholder="quantity">
  <input type="number " name="price" placeholder="price">
  <input type="submit" name="submit" value="Submit">
</form>
<?php mysqli_close($db);?>
</body>
</html>
