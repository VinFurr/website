<?php


print'<html ><head></head><body><h1> Oppretter bordliste (Vincent_tbl_bordplass)</h1><p>';

include ("./db_connection.php");

$sql = "CREATE TABLE if not exists Vincent_tbl_bordplass2 (PlassID VARCHAR(8) NOT NULL PRIMARY KEY,
  KundeID int(8),
  AntallPlasser int(2),
  Handikap TEXT,
  Kommentar TEXT)" ;

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
