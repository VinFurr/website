<?php

$teller = 0;

include ("./db_connection.php");

$sql = 'SELECT PlassID, KundeID FROM Vincent_tbl_bordplass2 WHERE KundeID != ""';

$resultat = mysqli_query($lenke, $sql);
while($row=mysqli_fetch_array($resultat)) {
$plassid_bord[$teller]=$row["PlassID"];
$kundeid_bord[$teller]=$row["KundeID"];

$teller= $teller+1;
}
mysqli_close($tilkopling);
mysqli_close($lenke);

if ($teller <=0) {
print "Alle har sjekket ut.";
}

if ($teller >=1) {

$tellerA = 0;

include ("./db_connection.php");

for ($a=0; $a <=$teller; $a++) {

$Kunde = $kundeid_bord[$a];

$sql = "SELECT * FROM Vincent_tbl_kunde2 WHERE KundeID = $Kunde";
$resultat = mysqli_query($lenke, $sql);

while($row=mysqli_fetch_array($resultat)) {
$kundeid[$tellerA] = $row["KundeID"];
$navn[$tellerA] = $row["Navn"];
$etternavn[$tellerA] = $row["Etternavn"];
$Telefon[$tellerA] = $row["Telefon"];
$epost[$tellerA] = $row["epost"];
$antpers[$tellerA] = $row["Personer"];
$kommentar[$tellerA] = $row["Kommentar"];
$ankomst[$tellerA] = $row["Ankomst"];
$avreise[$tellerA] = $row["Avreise"];
$sjekkinn[$tellerA] = $row["SjekkInn"];
$sjekkut[$tellerA] = $row["SjekkUt"];

$plassid[$tellerA] = $plassid_bord[$a];

$tellerA = $tellerA+1;
}

}

mysqli_close($tilkopling);
mysqli_close($lenke);


//print heading til visning.
print'
<html>
  <head>
  </head>
  <body><center>
    <h1>Alle innsjekkede kunder i database. </h1>
    <p>
    <table>
      <tr>
        <td>KundeID</td>
        <td>Navn</td>
        <td>Etternavn</td>
        <td>Telefon</td>
        <td>epost</td>
        <td>Personer</td>
        <td>Kommentar</td>
        <td>Ankomst</td>
        <td>Avreise</td>
        <td>SjekkInn</td>
        <td>SjekkUt</td>
      </tr>';
      $antallrow = $tellerA;

      for ($b=0; $b <= $antallrow; $b++) {
      print'
      <tr>
      <td>'.$kundeid[$b].'</td>
      <td>'.$navn[$b].'</td>
      <td>'.$etternavn[$b].'</td>
      <td>'.$telefon[$b].'</td>
      <td>'.$epost[$b].'</td>
      <td>'.$antpers[$b].'</td>
      <td>'.$kommentar[$b].'</td>
      <td>'.$ankomst[$b].'</td>
      <td>'.$avreise[$b].'</td>
      <td>'.$sjekkinn[$b].'</td>
      <td>'.$sjekkut[$b].'</td>
      </tr>';
      }
      print '
    </table>';

    print '
    <!---
    <form method = "POST" action = "./../uvUke31_db_2_tbl_run_underkatalog/kunde_sjekk_ut_valgt_v1.php" name= "kunde" >
    --->

    <form method = "POST" action = "./del4 kunde sjekk ut bekreft.php" name= "kunde" >

      <table>
        <tr>
          <td>Velg kunde som skal sjekke ut:</td>
          <td>
            <select name="kundenr">';
              $antallrow1= $teller;

              //list alle valgte rader ut i tabell
              for ($b=0;$b<=$antallrow1;$b++) {
                print'
              <option value = "'.$kundeid[$b].'">'.$kundeid[$b].'</option>'; }
                Print '
            </select>
          </td>
        </tr>
      </table>';
      print '
      <p>
        <input type ="submit" value= "Opprett_utsjekking" name="Utsjekking">
        <inputtype ="reset"value = "Fjern info i skjema" name="fjern_skjemainfo">
      </p>
    </form>
  </center></body>
</html>
';

//print avslutning paa visning.
}

?>
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<?php
include ("./index.php");
?>
