<?php 

#################################################################
# elevfag-eksempel. Database med 3 tabeller.                    #
# mange-til-mange relasjon.                                     #
# Peter M.M. Rasmussen.                                         #
# Filnavn: list_rader_fag.php                                 #
#################################################################

$teller = 0;

include("./db_connection.php");

$sql = "SELECT fagID, fagnavn, fagkode, fagbeskrivelse, semester, year, firstyear,lastyear, opprettet, kommentar  FROM tbl_fag";

$resultat = mysqli_query($lenke,$sql);

while ($row = mysqli_fetch_array($resultat)) {
    $fagID[$teller] = $row["fagID"];
    $fagnavn[$teller] = $row["fagnavn"];
    $fagkode[$teller] = $row["fagkode"];
    $fagbeskrivelse[$teller] = $row["fagbeskrivelse"];

    $semester[$teller] = $row["semester"];
    $year[$teller] = $row["year"];
    $firstyear[$teller] = $row["firstyear"];
    $lastyear[$teller] = $row["lastyear"];
    $opprettet[$teller] = $row["opprettet"];
    $kommentar[$teller] = $row["kommentar"];

    $teller = $teller+1;
}

mysqli_close($tilkopling);

//print heading til visning.
print '<html><head></head><body><h1><center>Fag listet</center></h1><table>';
print '<tr><td>fagID</td><td>Fagnavn</td><td>Fagkode</td><td>Fagbeskrivelse</td> <td>Semester</td><td>År</td><td>Første år</td><td>Siste år</td><td>Opprettet</td><td>Kommentar</td></tr>';

print 'Antall fag i register: ';
//antall rader.
$antallrow = $teller;

print $antallrow;

//list alle valgte rader ut i tabell
for($a = 0; $a <= $antallrow; $a++) {
print '<tr><td>'.$fagID[$a].'</td><td>'.$fagnavn[$a].'</td><td>'.$fagkode[$a].'</td><td>'.$fagbeskrivelse[$a].'</td><td>'.$semester[$a].'</td><td>'.$year[$a].'</td><td>'.$firstyear[$a].'</td><td>'.$lastyear[$a].'</td><td>'.$opprettet[$a].'</td><td>'.$kommentar[$a].'</td></tr>';
}

//print avslutning paa visning.
print '</table></body></html>';

?>
