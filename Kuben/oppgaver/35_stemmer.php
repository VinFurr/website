<?php

//HUSK AT SETTE INN RETT TABELLNAVN.

$teller = 0;

include("./db_connection.php");

$sql = "SELECT * FROM tbl_stemmer";

$resultat = mysqli_query($lenke, $sql);

while ($row = mysqli_fetch_array($resultat)) {
    $id[$teller] = $row["id"];
    $stemmer[$teller] = $row["stemmer"];

    $teller = $teller+1;
}

mysqli_close($tilkopling);

print "Eksempel som viser antall stemmer: ";
print '<p></p>';
$forekomst = (array_count_values($stemmer));

print '<p></p>';


if(count($forekomst)>0){
  foreach ($forekomst as $key => $value) {
    print '<p> Bilde '.$key.' har '.$value.' stemmer</p>';
  }
}


?>
