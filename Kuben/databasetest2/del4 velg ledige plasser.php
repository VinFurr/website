<?php

$teller = 0;

include ("./db_connection.php");

$sql = 'SELECT * FROM Vincent_tbl_bordplass2 WHERE KundeID IS NULL';

$resultat = mysqli_query($lenke, $sql);

while($row=mysqli_fetch_array($resultat)) {
$PlassID[$teller]=$row["PlassID"];
$KundeID[$teller]=$row["KundeID"];
$antallplasser[$teller]=$row["AntallPlasser"];
$handikap[$teller]=$row["Handikap"];
$kommentar[$teller]=$row["Kommentar"];
$teller= $teller+1; }

mysqli_close($tilkopling);
/*
//print heading til visning.
print'
<html>
  <head>
  </head>
  <body><center>
    <h1>Ledige border</h1>
      <table>
        <tr>
          <td>PlassID</td>
          <td>KundeID</td>
          <td>Antall plasser</td>
          <td>Handikapvennlig?</td>
          <td>Kommentar</td>
        </tr>';

        $antallrow= $teller;
        //list alle valgte rader ut i tabell.
        for ($a=0;$a<=$antallrow;$a++) {
          print'
        <tr>
          <td>'.$PlassID[$a].'</td>
          <td>'.$KundeID[$a].'</td>
          <td>'.$antallplasser[$a].'</td>
          <td>'.$handikap[$a].'</td>
          <td>'.$kommentar[$a].'</td>
        </tr>'; }
        //print avslutning paa visning.
        Print '
      </table>';
      print '
  </center></body>
</html>';
*/
  $antallrow= $teller;
  print'
<tr>
  <td> tildel plass</td>
  <td>
    <select name="plassid">';
      for ($a=0;$a<=$antallrow;$a++) {
        print'
        <option value="'.$PlassID[$a].'">'.$PlassID[$a].'</option>';
      }
      print'
    </select>
  </td>
</tr>
';
?>
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<?php
//include ("./index.php");
?>