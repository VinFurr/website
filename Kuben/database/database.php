<?php
$hostname = "localhost";
$user = "";
$password = "n4g5hijCsaYn";
$db = "";
$tilkobling = mysqli_connect("$hostname", "$user", "$password") or die ('could not connect to the datahost');
$lenke = mysqli_connect("$hostname", "$user", "$password" "$db");
mysqli_select_db($tilkobling, $db) or die ('could not connect to the dataserver');
?>
