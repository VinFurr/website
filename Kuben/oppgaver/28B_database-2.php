<?php

//HUSK AT GI TABELLEN RETT NAVN.

print '
<html><head></head><body>
<h1> Opprette tbl_sitat </h1><p>
';

include("./28B_database-logg_inn.php");

$sql = "create table if not exists Vincent_tabell (id bigint auto_increment primary key, sitat varchar(128) charset utf8, opprinnelse varchar(128), referanse varchar(128)) engine=InnoDB default charset latin1";

mysqli_query($lenke, $sql);

mysqli_close($tilkopling);

print '<p><strong> Setning som blev eksekvert: </strong><p>';

print "$sql </p>";

print '<p><strong> Tabell ble opprettet: </strong><p></body></html>';


?>
