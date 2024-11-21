<?php

#################################################################
# elevfag-eksempel. Database med 3 tabeller.                    #
# mange-til-mange relasjon.                                     #
# Peter M.M. Rasmussen.                                         # 
# Filnavn: tbl_fag_create.php                                   #
#################################################################

print'<html ><head></head><body><h1> Opprette tbl_fag </h1><p>';

include ("./db_connection.php");

$sql = "CREATE TABLE if not exists tbl_fag (fagID int(8) NOT NULL auto_increment PRIMARY KEY,
fagnavn VARCHAR(20),
fagkode VARCHAR(20),
fagbeskrivelse TEXT,
semester VARCHAR(20),
year VARCHAR(20),
firstyear VARCHAR(4),
lastyear VARCHAR(4),
opprettet date,
Kommentar TEXT)" ;

mysqli_query($lenke, $sql);
mysqli_close($tilkopling);

print '<p></p><strong> Setning som blev eksekvert: </strong><p></p>' ;
print $sql ;
print '<p><strong> Tabell ble opprettet</strong></p></body></html>' ;
?>
