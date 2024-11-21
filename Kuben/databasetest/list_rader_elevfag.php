<?php

#################################################################
# elevfag-eksempel. Database med 3 tabeller.                    #
# mange-til-mange relasjon.                                     #
# Peter M.M. Rasmussen.                                         #
# Filnavn: list_rader_elevfag.php                                 #
#################################################################

$teller = 0;

include("./db_connection.php");

$sql = "SELECT elevfagID, elevID, fagID, opprettet, sluttet,kommentar FROM tbl_fag";

$resultat = mysqli_query($lenke,$sql);

while ($row = mysqli_fetch_array($resultat)) {
    $elevfagID[$teller] = $row["elevfagID"];
    $elevID[$teller] = $row["elevID"];
    $fagID[$teller] = $row["fagID"];
    $opprettet[$teller] = $row["opprettet"];
    $sluttet[$teller] = $row["sluttet"];
    $kommentar[$teller] = $row["kommentar"];

    $teller = $teller+1;
}

mysqli_close($tilkopling);

//print heading til visning.
print '<html><head></head><body><h1><center>Elev deltakelse i fag, listet</center></h1><table>';
print '<tr><td>elevfagID</td><td>ElevID</td><td>FagID</td><td>Opprettet</td> <td>Sluttet</td><td>Kommentar</td></tr>';

print 'Antall elev-fag koplinger i register: ';
//antall rader.
$antallrow = $teller;

print $antallrow;

//list alle valgte rader ut i tabell
for($a = 0; $a <= $antallrow; $a++) {
print '<tr><td>'.$elevfagID[$a].'</td><td>'.$elevID[$a].'</td><td>'.$fagID[$a].'</td><td>'.$opprettet[$a].'</td><td>'.$sluttet[$a].'</td><td>'.$kommentar[$a].'</td></tr>';
}

//print avslutning paa visning.
print '</table></body></html>';

?> 
