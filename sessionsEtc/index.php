<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<center>
	<img src="https://mpng.subpng.com/20180715/yag/kisspng-question-mark-computer-icons-exclamation-mark-desk-question-mark-emoji-5b4bb794264216.8330599815316888521567.jpg" width = "200" height = "300">image</img>
    </center>
	</div>
	<a href="index2.php">page 2 </a>
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
