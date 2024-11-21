<?php

#################################################################
# elevfag-eksempel. Database med 3 tabeller.                    #
# mange-til-mange relasjon.                                     #
# Peter M.M. Rasmussen.                                         #
# Filnavn: tbl_elevfag_create.php                                 #
#################################################################

print'<html ><head></head><body><h1> Opprette tbl_elevfag </h1><p>';

include ("./db_connection.php");

$sql = "CREATE TABLE if not exists tbl_elevfag (elevfagID int(8) NOT NULL auto_increment PRIMARY KEY,
elevID int(8),
fagID int(8),
opprettet date,
sluttet date,
Kommentar TEXT)" ;

mysqli_query($lenke, $sql);
mysqli_close($tilkopling);

print '<p></p><strong> Setning som blev eksekvert: </strong><p></p>' ;
print $sql ;
print '<p><strong> Tabell ble opprettet</strong></p></body></html>' ;
?>
