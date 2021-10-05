<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["favcolor"] = "red";
print_r($_SESSION);
$ages = [];
echo $ages['Peter'] = "Peter is 35 yo  <br>";
echo $ages['Ben'] = "Ben is 37 yo  <br>";
echo $ages['Joe'] = "Joe is 43 yo  <br>";
?>


</body>
</html>
