<?php

$db = mysqli_connect("localhost","root","","shop");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
