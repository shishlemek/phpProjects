<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();

    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = [];
    }

    array_push($_SESSION['cart'], [
      'name' => $_POST['name'],
      'pcs' => $_POST['pcs'],
      'price' => $_POST['price'],
    ]);
    ?>
    <?php foreach ($_SESSION['cart'] as $key => $value): ?>
      <div>
        <?php $sum = 0;?>
        <?php echo $value['name']; ?>
        <?php echo $value['pcs']; ?>
        <?php echo $value['price']; ?>
        <?php echo $value['pcs']*$value['price'];
        $sum += $result;
        return $sum;
        ?>
      </div>

    <?php endforeach; ?>
    <div class="Header">
     <h3 class="Heading">Shopping Cart</h3>
     <h5 class="Action">Remove all</h5>
     </div>
     <div class="prices">
