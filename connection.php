<?php
$host = 'localhost';
$username = 'root';
$password='';
$database='ongeza_test';
$dbconfig = mysqli_connect($host, $username, $password);
mysqli_select_db($dbconfig,$database) or die("cannot select DB");
?>
