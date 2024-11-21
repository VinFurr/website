<?php


print'<html ><head></head><body><h1> Oppretter kundeliste (Vincent_tbl_kunde) </h1><p>';

include ("./db_connection.php");

$sql = "CREATE TABLE if not exists Vincent_tbl_kunde2 (KundeID int(8) NOT NULL auto_increment PRIMARY KEY,
  Navn TEXT,
  Etternavn TEXT,
  Telefon TEXT,
  epost TEXT,
  Kommentar TEXT,
  Dato TEXT,
  Ankomst TEXT,
  Avreise TEXT,
  Personer int(2),
  SjekkInn TEXT,
  SjekkUt TEXT
  )" ;

  mysqli_query ($lenke, $sql);
  mysqli_close ($tilkopling);

  //Utskrift til skjerm.
  print '<p></p><strong> Setning som blev eksekvert: </strong><p></p>';
  print $sql;
  print '<p><strong> Tabell ble opprettet</strong></p></body></html>' ;
  ?>

<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<?php
include ("./index.php");
?>
