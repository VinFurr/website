<?php
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
}
?>

<html>
  <head><title>eksempel 224.</title>
    <style>
      body {
        left: 5%;
        right: 5%;
        margin: auto;
        background-color: white;
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
          <td>antall aksjer for DNB</td>
          <td><input type="text" size="10" name="dnb"></td>
        </tr><tr>
          <td>antall aksjer for Statoil</td>
          <td><input type="text" size="10" name="statoil"></td>
        </tr><tr>
          <td>antall aksjer for Europris</td>
          <td><input type="text" size="10" name="europris"></td>
        </tr><tr>
          <td>antall aksjer for Gjensidige</td>
          <td><input type="text" size="10" name="gjensidige"></td>
        </tr><tr>
          <td>antall aksjer for Kongsberg</td>
          <td><input type="text" size="10" name="kongsberg"></td>
        </tr><tr>
          <td>antall aksjer for Hydro</td>
          <td><input type="text" size="10" name="hydro"></td>
        </tr><tr>
          <td>antall aksjer for Thon-gruppen</td>
          <td><input type="text" size="10" name="thon"></td>
        </tr><tr>
          <td>antall aksjer for Orkla</td>
          <td><input type="text" size="10" name="orkla"></td>
        </tr><tr>
          <td>antall aksjer for REC</td>
          <td><input type="text" size="10" name="rec"></td>
        </tr><tr>
          <td>antall aksjer for SAS</td>
          <td><input type="text" size="10" name="sas"></td>
        </tr><tr>
          <td>antall aksjer for XXL</td>
          <td><input type="text" size="10" name="xxl"> </td>
        </tr>
        <td colspan="2"><center><input type="submit" name="submit" value ="send svar" style="height:33px;width:200px"></center></td>
      </table>
    <div class="center">
      <h4></h4>
      <p>DNB - 200</p>
      <p>Statoil - 900</p>
      <p>Europris - 200</p>
      <p>Gjensidige - 201</p>
      <p>Kongsberg - 750</p>
      <p>Hydro - 500</p>
      <p>Thon-gruppen - 100</p>
      <p>Orkla - 800</p>
      <p>REC - 3000</p>
      <p>SAS - 1000</p>
      <p>XXL - 100</p>
    </div>
<?php
print'
    <div class ="chart1">
      <div style="height: '.$variabel.'px;">DNB'.$variabel2.'</div>
      <div style="height: '.$variabel.'px;">Statoil'.$variabel2.'</div>
      <div style="height: '.$variabel.'px;">Europris'.$variabel2.'</div>
      <div style="height: '.$variabel.'px;">Gjensidige'.$variabel2.'</div>
      <div style="height: '.$variabel.'px;">Kongsberg'.$variabel2.'</div>
      <div style="height: '.$variabel.'px;">Hydro'.$variabel2.'</div>
      <div style="height: '.$variabel.'px;">Thon'.$variabel2.'</div>
      <div style="height: '.$variabel.'px;">Orkla'.$variabel2.'</div>
      <div style="height: '.$variabel.'px;">REC'.$variabel2.'</div>
      <div style="height: '.$variabel.'px;">SAS'.$variabel2.'</div>
      <div style="height: '.$variabel.'px;">XXL'.$variabel2.'</div>
    </div>
  </body>
</html>';
?>
