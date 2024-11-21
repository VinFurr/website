<?php
$bekreftelse = 'usant';
$startverdi=80;
$makslengde=500;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$dnb = $_POST['dnb'];
$statoil = $_POST['statoil'];
$europris = $_POST['europris'];
$gjensidige = $_POST['gjensidige'];
$kongsberg = $_POST['kongsberg'];
$hydro = $_POST['hydro'];
$thon = $_POST['thon'];
$orkla = $_POST['orkla'];
$rec  = $_POST['rec'];
$sas  = $_POST['sas'];
$xxl = $_POST['xxl'];
$totalverdi = $dnb + $statoil + $europris + $gjensidige + $kongsberg + $hydro + $thon + $orkla + $rec + $sas + $xxl;


$bekreftelse = 'sant';
}
?>

<html>
  <head><title>Oppgave 2</title>
    <style>
      body {
        background-color: rgb(0, 128, 255);
        position: absolute;
        left: 5%;
        right:5%;
        text-align: center;
      }
      .center {
        text-align: center;
        }
      .chart1 div {
        font: 10px sans-serif;
        background-color: steelblue;
        text-align: right;
        padding: 3px;
        margin: 1px;
        color: white;
      }
    </style>
  </head>
  <body>

    <table>
      <form name="personal" action="" method="POST">
        <tr>
          <td>Antall aksjer for DNB</td>
          <td><input type="text" size="10" name="dnb"></td>
        </tr><tr>
          <td>Antall aksjer for Statoil</td>
          <td><input type="text" size="10" name="statoil"></td>
        </tr><tr>
          <td>Antall aksjer for Europris</td>
          <td><input type="text" size="10" name="europris"></td>
        </tr><tr>
          <td>Antall aksjer for Gjensidige</td>
          <td><input type="text" size="10" name="gjensidige"></td>
        </tr><tr>
          <td>Antall aksjer for Kongsberg</td>
          <td><input type="text" size="10" name="kongsberg"></td>
        </tr><tr>
          <td>Antall aksjer for Hydro</td>
          <td><input type="text" size="10" name="hydro"></td>
        </tr><tr>
          <td>Antall aksjer for Thon-gruppen</td>
          <td><input type="text" size="10" name="thon"></td>
        </tr><tr>
          <td>Antall aksjer for Orkla</td>
          <td><input type="text" size="10" name="orkla"></td>
        </tr><tr>
          <td>Antall aksjer for REC</td>
          <td><input type="text" size="10" name="rec"></td>
        </tr><tr>
          <td>Antall aksjer for SAS</td>
          <td><input type="text" size="10" name="sas"></td>
        </tr><tr>
          <td>Antall aksjer for XXL</td>
          <td><input type="text" size="10" name="xxl"> </td>
        </tr>
        <td colspan="2"><center><input type="submit" name="submit" value ="send svar" style="height:33px;width:200px"></center></td>
      </table>

<?php
if ($bekreftelse == 'sant' and $totalverdi != 0) {
  print'
    <div class ="chart1">
      <div style="width: '.($makslengde/$totalverdi*$dnb + $startverdi).'px">DNB '.($dnb + 0).'</div>
      <div style="width: '.($makslengde/$totalverdi*$statoil + $startverdi).'px;">Statoil '.($statoil + 0).'</div>
      <div style="width: '.($makslengde/$totalverdi*$europris + $startverdi).'px;">Europris '.($europris + 0).'</div>
      <div style="width: '.($makslengde/$totalverdi*$gjensidige + $startverdi).'px;">Gjensidige '.($gjensidige + 0).'</div>
      <div style="width: '.($makslengde/$totalverdi*$kongsberg + $startverdi).'px;">Kongsberg '.($kongsberg + 0).'</div>
      <div style="width: '.($makslengde/$totalverdi*$hydro + $startverdi).'px;">Hydro '.($hydro + 0).'</div>
      <div style="width: '.($makslengde/$totalverdi*$thon + $startverdi).'px;">Thon-gruppen '.($thon + 0).'</div>
      <div style="width: '.($makslengde/$totalverdi*$orkla + $startverdi).'px;">Orkla '.($orkla + 0).'</div>
      <div style="width: '.($makslengde/$totalverdi*$rec + $startverdi).'px;">REC '.($rec + 0).'</div>
      <div style="width: '.($makslengde/$totalverdi*$sas + $startverdi).'px;">SAS '.($sas + 0).'</div>
      <div style="width: '.($makslengde/$totalverdi*$xxl + $startverdi).'px;">XXL '.($xxl + 0).'</div>
      <div style="width: '.($makslengde + $startverdi).'px;">Aksjer totalt '.$totalverdi.'</div>
    </div>';
  }
elseif ($bekreftelse == 'sant' and $totalverdi == 0) {
  print '<h1>FEIL!</h1><h2>totale antall aksjer kan ikke v&aelig;re 0</h2>';
}
elseif ($bekreftelse != 'sant') {
  print '<h1>venter p&aring; data...</h1>';
  }
  ?>

  </body>
</htmlA
