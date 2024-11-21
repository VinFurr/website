<?php

//HUSK AT SETTE INN RETT TABELLNAVN.
$elevident = 0;
$personnummer = 0;

$elevident = $_POST['elevID'];
$personnummer = $_POST['personnr'];

if ($elevident != 0) {
    print "Du valgte elevID: ";
    print $elevident;
    print '.<p>';
    $teller = 0;
    include("./db_connection.php");
    $sql = "SELECT elevID, personnr, fornavn, etternavn, gatenavn, poststed, postnr, land, nasjonalitet, opprettet, sluttet, kommentar FROM tbl_elev WHERE (elevID = '$elevident')";
    }

if ($personnummer != 0) {
    print "Du valgte personnr: ";
    print $personnummer;
    print '.<p>';
    $teller = 0;
    include("./db_connection.php");
    $sql = "SELECT elevID, personnr, fornavn, etternavn, gatenavn, poststed, postnr, land, nasjonalitet, opprettet, sluttet, kommentar FROM tbl_elev WHERE (personnr = '$personnummer')";
    }

$resultat = mysqli_query($lenke, $sql);

while ($row = mysqli_fetch_array($resultat)) {
    $elevID[$teller] = $row["elevID"];
    $personnr[$teller] = $row["personnr"];
    $fornavn[$teller] = $row["fornavn"];
    $etternavn[$teller] = $row["etternavn"];
    $gatenavn[$teller] = $row["gatenavn"];
    $poststed[$teller] = $row["poststed"];
    $postnr[$teller] = $row["postnr"];
    $land[$teller] = $row["land"];
    $nasjonalitet[$teller] = $row["nasjonalitet"];
    $opprettet[$teller] = $row["opprettet"];
    $sluttet[$teller] = $row["sluttet"];
    $kommentar[$teller] = $row["kommentar"];

    $teller = $teller+1;
}

mysqli_close($tilkopling);

//print heading til visning.
print '<html><head></head><body><h1><center>Elevinformasjon</center></h1><table>';
print '<tr><td>elevID</td><td>Personnr</td><td>Fornavn</td><td>Etternavn</td> <td>Gatenavn</td><td>Poststed</td><td>Postnr</td><td>Land</td><td>Nasjonalitet</td><td>Opprettet</td><td>Sluttet</td><td>Kommentar</td></tr>';

$antall= $teller;
$tall = $antall -1;
$pnr= $personnr[$tall];

print 'Databasen innholder ';
print $antall;
print ' registreringer paa ';
print $pnr;
print '.<p>';


//antall rader som er skrevet ut i arrayform.
$antallrow = count($idnummer);
$antallrow = $antallrow +1;
print "Antall rader med den person: ";
print $antallrow."<p>";

//list alle valgte rader ut i tabell
for($a = 0; $a <= $antallrow; $a++) {
print '<tr><td>'.$elevID[$a].'</td><td>'.$personnr[$a].'</td><td>'.$fornavn[$a].'</td><td>'.$etternavn[$a].'</td><td>'.$gatenavn[$a].'</td><td>'.$poststed[$a].'</td><td>'.$postnr[$a].'</td><td>'.$land[$a].'</td><td>'.$nasjonalitet[$a].'</td><td>'.$opprettet[$a].'</td><td>'.$sluttet[$a].'</td><td>'.$kommentar[$a].'</td></tr>';
}

//print avslutning paa visning.
print '</table></body></html>';

?> 
