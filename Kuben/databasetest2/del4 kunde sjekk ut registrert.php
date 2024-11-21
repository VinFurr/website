<?php


$kundeID = $_POST['kundeid'];
$day = $_POST['Day'];
$month = $_POST['Month'];
$year = $_POST['Year'];


$avreise = $day.'.'.$month.'.'.$year;

print "<center><p>Kundenummer: ";
print $kundeID;
print "</p><p>Avreisedato: ";
print $avreise;
/*print "</p><p>Betaling: ";
print $betaling;*/

include("./db_connection.php");

$sqlA = "UPDATE Vincent_tbl_kunde2 SET Avreise = '$avreise', SjekkUt = 'Ja'/*, Betalt = '$betaling'*/ WHERE KundeID = '$kundeID'";

$resultat = mysqli_query($lenke, $sqlA);

$sqlB = "UPDATE Vincent_tbl_bordplass2 SET KundeID = null WHERE KundeID = '$kundeID'";

$resultat = mysqli_query($lenke, $sqlB);

mysqli_close($tilkopling);
mysqli_close($lenke);

print'<br>Oppdatering utf&oslash;rt <br><a href="./del4 kunde sjekk ut.php"><button>sjekk ut neste kunde</button></center>';

?>
<?php
include ("./index.php");
?>
