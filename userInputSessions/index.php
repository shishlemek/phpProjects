<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<a href="index2.php">page 2</a>
	<?php
		$name = 'pesho ';
		echo $name;

		switch ($name) {
			case 'Ivan':
				echo 'the name is Ivan'  . '<br>';
				break;
			case 'kolio':
			    echo 'the name is kolio'  . '<br>';
			    break;
			default:
				echo ' the name is pesho '  . '<br>';
				break;
    }

		echo ' you found the name!!';
	?>
</body>
</html>