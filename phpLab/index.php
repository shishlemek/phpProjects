<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Online shop</title>
  <link rel="stylesheet"href="style.css">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
    <!-- <a class="button button1" href="addCart.php" >Your cart</a> -->
  <h1>SG SHOP</h1>

  <?php
  $sgShop = [
    'p1' => [
      'price' =>'3 lv',
      'image' =>'ssocks.jpg',
      'name' => 'Real spider-man socks',
      'availability' => '80 000',
    ],
    'p2' => [
      'price' =>'12 lv',
      'image' =>'sgloves.jpg',
      'name' => 'spider-man gloves',
      'availability' => '60 000',
    ],
    'p3' => [
      'price' =>'3 lv',
      'image' =>'isocks.jpg',
      'name' => 'Real Iron Man socks',
      'availability' => '80 000',
    ],
    'p4' => [
      'price' =>'12 lv',
      'image' =>'igloves.jpeg',
      'name' => 'Real Iron Man gloves',
      'availability' => '60 000',
    ],
    'p5' => [
      'price' =>'3 lv',
      'image' =>'bsocks.jpg',
      'name' => 'Real Iron Man socks',
      'availability' => '80 000',
    ],
    'p6' => [
      'price' =>'12 lv',
      'image' =>'bgloves.jpg',
      'name' => 'Real Batman gloves',
      'availability' => '60 000',
    ],
  ];
  ?>

  <?php foreach ($sgShop as $key => $product): ?>
    <div class="gallery">
        <img src="<?php echo $product['image'] ?>">
      <div class="desc"><?php echo $product['name']; ?></div>
      <a><?php echo $product['price']; ?></a>
      <form method="post" action="addCart.php">
        <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
        <input type="number" name="pcs" class="peaces" placeholder="Pcs" min="0" max="80000">
        <input type="hidden" name="name" value="<?php echo $key; ?>">
        <button class="cart"><i style='font-size:24px' class='fas'>&#xf217;</i></button>
      </form>
    </div>
      <?php endforeach; ?>
  

</body>
</html>
