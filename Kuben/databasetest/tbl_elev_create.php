<?php

#################################################################
# elevfag-eksempel. Database med 3 tabeller.                    #
# mange-til-mange relasjon.                                     #
# Peter M.M. Rasmussen.                                         #
# Filnavn: tbl_elev_create.php                                 #
#################################################################

print'<html ><head></head><body><h1> Opprette tbl_elev </h1><p>';

include ("./db_connection.php");

$sql = "CREATE TABLE if not exists tbl_elev (elevID int(8) NOT NULL auto_increment PRIMARY KEY,
personnr VARCHAR(11),
fornavn VARCHAR(20),
etternavn VARCHAR(20),
gatenavn VARCHAR(20),
poststed VARCHAR(20),
postnr VARCHAR(20),
land VARCHAR(20),
nasjonalitet VARCHAR(20),
opprettet date,
sluttet date,
Kommentar TEXT)" ;

mysqli_query($lenke, $sql);
mysqli_close($tilkopling);

print '<p></p><strong> Setning som blev eksekvert: </strong><p></p>' ;
print $sql ;
print '<p><strong> Tabell ble opprettet</strong></p></body></html>' ;
?>
