<?php

//HUSK AT SETTE INN RETT TABELLNAVN.

########### List alle fag. ##############

$elevident = "";
$personnummer = "";

$elevident = $_POST['elevID'];
$personnummer = $_POST['personnr'];

if ($elevident != 0) {
    print "Du valgte elevID: ";
    print $elevident;
    print '.<p>';
}


if ($personnummer != 0) {
    print "Du valgte personnr: ";
    print $personnummer;
    print '.<p>';
}

    $tellerA = 0;
    include("./db_connection.php");
    $sql = "SELECT fagID, fagnavn, fagkode, fagbeskrivelse, semester, year, firstyear, lastyear, opprettet, kommentar FROM tbl_fag";

$resultat = mysqli_query($lenke, $sql);

while ($row = mysqli_fetch_array($resultat)) {
    $fagID[$tellerA] = $row["fagID"];
    $fagnavn[$tellerA] = $row["fagnavn"];
    $fagkode[$tellerA] = $row["fagkode"];
    $fagbeskrivelse[$tellerA] = $row["fagbeskrivelse"];
    $semester[$tellerA] = $row["semester"];
    $year[$tellerA] = $row["year"];
    $firstyear[$tellerA] = $row["firstyear"];
    $lastyear[$tellerA] = $row["lastyear"];
    $opprettet[$tellerA] = $row["opprettet"];
    $kommentar[$tellerA] = $row["kommentar"];

    $tellerA = $tellerA+1;
}

mysqli_close($tilkopling);

//print heading til visning.
print '<html><head></head><body><h1><center>Fagliste</center></h1><table>';
print '<tr><td>FagID</td><td>Fagnavn</td><td>Fagkode</td><td>Fagbeskrivelse</td> <td>Semester</td><td>År</td><td>FørsteÅr</td><td>SisteÅr</td><td>Opprettet</td><td>Kommentar</td></tr>';

$antall= $tellerA;

print 'Databasen innholder ';
print $antall;
print ' registreringer paa fag.';
print '.<p>';


//antall rader som er skrevet ut i arrayform.
$antallrow = count($fagID);
$antallrow = $antallrow +1;
print "Antall rader med fag: ";
print $antallrow."<p>";

//list alle valgte rader ut i tabell
for($a = 0; $a <= $antallrow; $a++) {
print '<tr><td>'.$fagID[$a].'</td><td>'.$fagnavn[$a].'</td><td>'.$fagkode[$a].'</td><td>'.$fagbeskrivelse[$a].'</td><td>'.$semester[$a].'</td><td>'.$year[$a].'</td><td>'.$firstyear[$a].'</td><td>'.$lastyear[$a].'</td><td>'.$opprettet[$a].'</td><td>'.$kommentar[$a].'</td></tr>';
}

//print avslutning paa visning.
print '</table></body></html>';

########### VELG FAG #############################

//print heading til visning.
print '<html><head></head><body>';
print '<h2>Velg fag som du vil legge elev til. </h2>';

#################################
print '<form method = "POST" action = "./elev_til_fag_registrer.php" name="fag">';
print '<select size = "1" name = "fagID">';

//antall rader som er skrevet ut i arrayform.
$antallrowC = count($fagID);

//list alle valgte rader ut i tabell
for($a = 0; $a <= $antallrowC; $a++) {
print '<option Value"'.$efagID[$a].'">'.$fagID[$a].'</option>';
}
print '</select>';
print '<input type="hidden" name="elevident" value="'.$elevident.'">';
print '<input type="hidden" name="personnummer" value="'.$personnummer.'">';
print '<input type="submit" value="Send valgt fagID" name="send_valg"></form>';
//print avslutning paa visning.
##############################



?> 
