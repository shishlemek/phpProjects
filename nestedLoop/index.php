<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
    for ($x = 0 ; $x <= 10; $x++) {
      echo "<p> The number is: $x </p>";
    }

    for ($x = 1; $x <= 10; $x++) {
      echo ' <p> No' . $x . ' : ' ;
      for ($y = 1; $y <= 5; $y++) {
        echo $y . ' , ';
      }
      echo ' </p> ';
    }

    $arName = [
      'name' => 'Gosho Petrov',
      'family_members' =>[
        'wife' => 'Pepa Petrova',
        'son' => 'Ivan Petrov',
        'daughter'=> 'Ceca Petrova',
        'dauther_boyfriend' => 'Pesho'
      ],
      '<br>',
      'address' => [
        'city' => 'Vratsa',
        'street' => 'Kokiche',
        'street_number' => 14,
      ],
    ];
    print_r($arName);

    if ($_POST) {
      echo '<pre>';
      echo htmlspecialchars(print_r($_POST, true));
      echo '</pre>';
    }
  ?>
  <center>
    <form action="" method="post">
      Name:  <input type="text" name="personal[name]" /><br />
      Email: <input type="text" name="personal[email]" /><br />
      Beer: <br />
      <select multiple name="beer[]">
        <option value="warthog">Warthog</option>
        <option value="guinness">Guinness</option>
        <option value="stuttgarter">Stuttgarter Schwabenbräu</option>
      </select><br />
      <input type="submit" value="submit me!" />
    </center>
  </form>
</body>
</html>
