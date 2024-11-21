<?php

$teller = 0;

include ("./db_connection.php");

$sql = "SELECT * FROM Vincent_tbl_kunde2";

$resultat = mysqli_query($lenke, $sql);

while($row=mysqli_fetch_array($resultat)) {
$kundeid[$teller]=$row["KundeID"];
$navn[$teller]=$row["Navn"];
$etternavn[$teller]=$row["Etternavn"];
$telefon[$teller]=$row["Telefon"];
$epost[$teller]=$row["epost"];
$personer[$teller]=$row["Personer"];
$kommentar[$teller]=$row["Kommentar"];
$dato[$teller]=$row["Dato"];
$ankomst[$teller]=$row["Ankomst"];
$avreise[$teller]=$row["Avreise"];
$sjekkinn[$teller]=$row["SjekkInn"];
$sjekkut[$teller]=$row["SjekkUt"];
$teller= $teller+1; }

mysqli_close($tilkopling);

//print heading til visning.?>
<html>
  <head>
  </head>
  <body><center>
    <h1>Alle registrerte kunder</h1><p></p>
    <table>
      <tr>
        <td>KundeID</td>
        <td>Navn</td>
        <td>Etternavn</td>
        <td>Telefon</td>
        <td>E-post</td>
        <td>Antall personer</td>
        <td>Kommentar</td>
        <td>Dato</td>
        <td>Ankomst</td>
        <td>Avreise</td>
        <td>Sjekk inn</td>
        <td>Sjekk ut</td>
      </tr>
      <?php
      $antallrow= $teller;
      //list alle valgte rader ut i tabell
      for ($a=0;$a<=$antallrow;$a++) {
      print'
      <tr>
        <td>'.$kundeid[$a].'</td>
        <td>'.$navn[$a].'</td>
        <td>'.$etternavn[$a].'</td>
        <td>'.$telefon[$a].'</td>
        <td>'.$epost[$a].'</td>
        <td>'.$personer[$a].'</td>
        <td>'.$kommentar[$a].'</td>
        <td>'.$dato[$a].'</td>
        <td>'.$ankomst[$a].'</td>
        <td>'.$avreise[$a].'</td>
        <td>'.$sjekkinn[$a].'</td>
        <td>'.$sjekkut[$a].'</td>
      </tr>';
      }
      //print avslutning paa visning.
      print '
    </table>
  </center></body>
</html>';
?>
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->

<?php
include ("./index.php");
?>
