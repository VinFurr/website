<?php
$vanlig_vann_per_min = 16;
$spare_vann_per_min = 8;
$varme_vann_per_liter_cal = 1000; //1000cal for å varme 1 liter med 1 grad
$vanntemperaturkald = 5;
/*
variabelen under brukes egentlig ikke i oppgave 2...
$vanntemperaturforti = 40;
*/
$varme_vann_per_liter_kj = (($varme_vann_per_liter_cal*4.184)/1000);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//oppgave 1
$dusjtid = $_POST['dusjtid'];
$dusjhode = $_POST['dusjhode'];
//oppgave 2
$dusjtemp = $_POST['dusjtemp'];
}
//det er mye lettere å gjøre det på denne måten istedenfor å ha hele html i print...
?>
<!--det er mye lettere å gjøre det på denne måten istedenfor å ha hele html i print...-->
<!DOCTYPE html>
<html>
  <head>
    <title>Oppgave 2</title>
    <link rel="stylesheet" href="./index.css">
  </head>
  <body>
  <div class="centeri"></div>
    <h1>Oppgave 2</h1><br>
      <center><table>
        <form name="personal" action="" method="POST">
        <tr>
          <td>Hvor lang tid dusjer du?</td>
          <td><input type="text" size="10" name="dusjtid"> minutter</td>
        </tr><tr>
          <td>Hvilke vanntemperatur foretrekker du?</td>
          <td><select name="dusjtemp" size = "1">
                <option value="30" >30&#8451;</option>
                <option value="32" >32&#8451;</option>
                <option value="34" >34&#8451;</option>
                <option value="36" >36&#8451;</option>
                <option value="38" >38&#8451;</option>
                <option value="40" >40&#8451;</option>
                <option value="42" >42&#8451;</option>
              </select></td>
        </tr><tr>
          <td>Vanlig eller sparedusj?</td>
          <td><select name="dusjhode" size = "1">
               <option value="vanlig" >Vanlig dusjhode</option>
               <option value="spare"  >Sparedusj</option>
              </select></td>
        </tr><tr>
          <td colspan="2"><center><input type="submit" name="submit" value ="send svar" style="height:33px;width:200px"></center></td>
        </tr></form>
    </table></center>
<?php
if ($dusjhode == 'vanlig') {
  print 'Du bruker ' .($vanlig_vann_per_min * $dusjtid). ' liter n&aring;r du dusjer <br>';
  print 'Du bruker ' .(($vanlig_vann_per_min * $dusjtid)*($varme_vann_per_liter_cal*($dusjtemp-$vanntemperaturkald))). ' kalorier (cal) energi til &aring varme vannet <br>';
  print 'Du bruker ' .(($vanlig_vann_per_min * $dusjtid)*($varme_vann_per_liter_kj*($dusjtemp-$vanntemperaturkald))). ' kilojoule (kj) energi til &aring varme vannet <br>';
}
elseif ($dusjhode == 'spare') {
  print 'Du bruker ' .($spare_vann_per_min * $dusjtid). ' liter n&aring;r du dusjer <br>';
  print 'Du bruker ' .(($spare_vann_per_min * $dusjtid)*($varme_vann_per_liter_cal*($dusjtemp-$vanntemperaturkald))). ' kalorier (cal) energi til &aring varme vannet <br>';
  print 'Du bruker ' .(($spare_vann_per_min * $dusjtid)*($varme_vann_per_liter_kj*($dusjtemp-$vanntemperaturkald))). ' kilojoule (kj) energi til &aring varme vannet <br>';
}
?>


    <br><br>
  </body>
</html>
