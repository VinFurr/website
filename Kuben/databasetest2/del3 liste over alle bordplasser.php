<?php

$teller = 0;

include ("./db_connection.php");

$sql = "SELECT * FROM Vincent_tbl_bordplass2";

$resultat = mysqli_query($lenke, $sql);

while($row=mysqli_fetch_array($resultat)) {
$plassid[$teller]=$row["PlassID"];
//$kundeid[$teller]=$row["KundeID"];
$antallplasser[$teller]=$row["AntallPlasser"];
$handikap[$teller]=$row["Handikap"];
$kommentar[$teller]=$row["Kommentar"];
$teller= $teller+1; }

mysqli_close($tilkopling);

//print heading til visning.?>
<html>
  <head>
    <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
      }
      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }
      tr:nth-child(even) {
        background-color: #dddddd;
      }
    </style>
  </head>
  <body><center>
    <h1>Alle registrerte bordplasser.</h1><p></p>
    <table>
      <tr>
        <td>PlassID</td>
        <td>Bordnr</td>
        <td>AntallPlasser</td>
        <td>Handikap</td>
        <td>kommentar</td>
      </tr>
      <?php
      $antallrow= $teller;
      //list alle valgte rader ut i tabell
      for ($a=0;$a<=$antallrow;$a++) {
      print'
      <tr>
        <td>'.$plassid[$a].'</td>
        <td>'.$bordnr[$a].'</td>
        <td>'.$antallplasser[$a].'</td>
        <td>'.$handikap[$a].'</td>
        <td>'.$kommentar[$a].'</td>
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
