<?php

#

$teller = 0;

include ("./db_connection.php");

$sql = 'SELECT * FROM tbl_plass_camping WHERE KundeID IS NULL';

$resultat = mysqli_query($lenke, $sql);

while($row=mysqli_fetch_array($resultat)) {
$PlassID[$teller]=$row["PlassID"];
$KundeID[$teller]=$row["KundeID"];
$Lengde[$teller]=$row["Lengde"];
$Bredde[$teller]=$row["Bredde"];
$Handicap[$teller]=$row["Handicap"];
$Husdyr[$teller]=$row["Husdyr"];
$Elektrisitet[$teller]=$row["Elektrisitet"];
$Vann[$teller]=$row["Vann"];
$Type[$teller]=$row["Type"];
$Kommentar[$teller]=$row["Kommentar"];
$teller= $teller+1; }

mysqli_close($tilkopling);
mysqli_close($lenke);

//print heading til visning.

if ($teller <=0) {
print "Alle plasser er opptatt.";
}
elseif ($teller >= 1) {

//print'<html><head></head>
<body>Ledige utleieplasser p