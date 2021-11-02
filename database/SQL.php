<!DOCTYPE HTML>
<html lang="bg" lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
</head>
<body>
  <?php

  $db = mysqli_connect("localhost","root","","shop");

  if(!$db)
  {
    die("Connection failed: " . mysqli_connect_error());
  }

  if(isset($_POST['submit']))
  {
    $product_name = $_POST['product_name'];

    $insert = mysqli_query($db,"INSERT INTO `products`(`product_name`) VALUES ('$product_name')");

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

  <h3>Product</h3>

  <form method="POST">
    Product Name : <input type="text" name="product name" placeholder="Enter product name" Required>
    <br/>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
