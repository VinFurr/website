<?php

//HUSK AT BRUKE RETT NAVN PÅ TABELLEN.

include ("./28B_database-logg_inn.php");
print' <html><body><table><tr><td>Sitat</td><td>Opprinnelse</td><td>referanse</td></tr>';
$sql = "SELECT id, sitat, opprinnelse, referanse FROM Vincent_tabell";
$resultat = mysqli_query($lenke, $sql);
while ($row = mysqli_fetch_array($resultat)){
$sitat = $row["sitat"];
$opprinnelse = $row["opprinnelse"];
$referanse = $row["referanse"];
print '<tr><td>' .$sitat. '</td><td>' .$opprinnelse. '</td><td>' .$referanse. '</td></tr>';
}
mysqli_close($tilkopling);
print '</table></body></html>';
?>
