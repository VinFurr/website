<?php
$hostname = "localhost";
$user = "inforjza_vincent";
$password = "n4g5hijCsaYn";
$db = "inforjza_db9";

$tilkopling = mysqli_connect("$hostname", "$user", "$password") or die('Could not connect to databasehost');
$lenke = mysqli_connect($hostname, $user, $password, $db);
mysqli_select_db($tilkopling, $db) or die('Could not select databasename');

?>
