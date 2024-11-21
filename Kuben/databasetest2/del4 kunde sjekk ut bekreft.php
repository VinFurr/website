<?php


$kundenr = $_POST['kundenr'];

$teller = 0;

include ("./db_connection.php");

$sql = "SELECT * FROM Vincent_tbl_kunde2 WHERE KundeID = $kundenr";
$resultat = mysqli_query($lenke, $sql);

while($row=mysqli_fetch_array($resultat)) {
$kundeid[$teller]=$row["KundeID"];
$navn[$teller]=$row["Navn"];
$etternavn[$teller]=$row["Etternavn"];
$telefon[$teller]=$row["Telefon"];
$epost[$teller]=$row["epost"];
$antpers[$teller]=$row["Personer"];
$kommentar[$teller]=$row["Kommentar"];
$dato[$teller]=$row["Dato"];
$ankomst[$teller]=$row["Ankomst"];
$avreise[$teller]=$row["Avreise"];
$sjekkinn[$teller]=$row["SjekkInn"];
$sjekkut[$teller]=$row["SjekkUt"];
$teller= $teller+1; }

mysqli_close($tilkopling);
mysqli_close($lenke);

//print heading til visning.
print'
<html>
  <head>
  </head>
  <body><center>
    <h1>Utfr utsjekking.</h1>
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
        <!--<td>Dato</td>-->
        <td>Ankomst</td>
        <td>Avreise</td>
        <td>SjekkInn</td>
        <td>SjekkUt</td>
      </tr>';
      $antallrow= $teller;

      //list alle valgte rader ut i tabell

      print '
      <form method = "POST" action = "./del4 kunde sjekk ut registrert.php" name= "kunde" >';
      for ($a=0;$a<$antallrow;$a++) {
        print'
        <tr>
          <td>'.$kundeid[$a].'</td>
          <td>'.$navn[$a].'</td>
          <td>'.$etternavn[$a].'</td>
          <td>'.$telefon[$a].'</td>
          <td>'.$epost[$a].'</td>
          <td>'.$antpers[$a].'</td>
          <td>'.$kommentar[$a].'</td>
          <!--<td>'.$dato[$a].'</td>-->
          <td>'.$ankomst[$a].'</td>
          <td>';

          //Lag datovalg til utsjekking.
      print '
          <select name="Day">';

          for ($d=1; $d<=31; $d++) {
            print '
            <option value = "'.$d.'">'.$d.'</option>';
          }
          print '
          </select>
          <select name="Month">';
          for ($b=1; $b<=12; $b++) {
            print '
            <option value = "'.$b.'">'.$b.'</option>';
          }
          print '
          </select>
          <select name="Year">';
          for ($c=2016; $c<=2026; $c++) {
            print '
            <option value = "'.$c.'">'.$c.'</option>';
          }
          print '
          </select>';

          //fortsetter utlistning.
          print '
        </td>
        <!--<td>-->';

          //Lager betalingsvalg
          /*print '<select name="Betaling">';
          print '<option value = "kontant">Kontant</option>';
          print '<option value = "Visa">Visa</option>';
          print '<option value = "Master">Master</option>';
          print '<option value = "Giro">Giro</option>';
          print '</select>';
          */
        print'
        <!--</td>-->
        <td>'.$sjekkinn[$a].'</td>

        <td>
          <input type="hidden" name="kundeid" value="'.$kundenr.'">
          <input type ="submit" value= "Utf&oslash;r utsjekking" name="utsjekking">
        </td>
      </tr>';
        }

      //print avslutning paa visning.
      Print '
      <form>
    </table>
  </center></body>
</html>';
?>
<?php
include ("./index.php");
?>
