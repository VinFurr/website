<?php
//HUSK AT SETTE INN RETT TABELLNAVN.

$teller = 0;

include("./db_connection.php");

$sql = "SELECT * FROM tbl_elev"; 

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
print '<html><head></head><body>';
print '<h2>Velg elev som du vil legge til fag. </h2>';

#################################
print '<form method = "POST" action = "./elev_til_fag_list.php" name="elev">';
print '<select size = "1" name = "elevID">';

//antall rader som er skrevet ut i arrayform.
$antallrow = count($elevID);

//list alle valgte rader ut i tabell
for($a = 0; $a <= $antallrow; $a++) {
print '<option Value"'.$elevID[$a].'">'.$elevID[$a].'</option>';
}
print '</select>';
print '<input type="submit" value="Send valgt elevID" name="send_valg"></form>';
//print avslutning paa visning.
##############################

##############################
print '<form method = "POST" action = "./elev_til_fag_list.php" name="elev">';
print '<select size = "1" name = "personnr">';
//list alle valgte rader ut i tabell
for($a = 0; $a <= $antallrow; $a++) {
print '<option Value"'.$personnr[$a].'">'.$personnr[$a].'</option>';
}
print '</select>';
print '<input type="submit" value="Send valgt personnr" name="send_valg"></form>';
//print avslutning paa visning.
print '</form></body></html>';

?>
