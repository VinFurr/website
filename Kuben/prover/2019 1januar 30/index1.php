<?php

$vanlig_vann_per_min = 16;
$spare_vann_per_min = 8;
$varme_vann_per_liter_cal = 1000; //1000cal for å varme 1 liter med 1 grad
$vanntemperaturkald = 5;
$vanntemperaturforti = 40;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//oppgave 1
$dusjtid = $_POST['dusjtid'];
$dusjhode = $_POST['dusjhode'];
}
//det er mye lettere å gjøre det på denne måten istedenfor å ha hele html i print...
?>
<!--det er mye lettere å gjøre det på denne måten istedenfor å ha hele html i print...-->
<!DOCTYPE html>
<html>
  <head>
    <title>Oppgave 1</title>
    <link rel="stylesheet" href="./index.css">
  </head>
  <body>
  <div class="centeri"></div>
    <h1>Oppgave 1</h1><br>
    <center><table>
      <form name="personal" action="" method="POST">
      <tr>
        <td>Hvor lang tid dusjer du?</td>
        <td><input type="text" size="10" name="dusjtid"> minutter</td>
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
    <!--
    <form name="personal" action="" method="POST">
    Hvor lang tid dusjer du?: <input type="text" size="10" name="dusjtid"> minutter<p>
    vanlig eller sparedusj:   <select name="dusjhode" size = "1">
                                <option value="vanlig" >vanlig dusjhode</option>
                                <option value="spare"  >sparedusj</option>
                              </select><br>
    <input type="submit" name="submit" value ="send svar"></form>-->
<?php
if ($dusjhode == 'vanlig') {
  print 'Du bruker ' .($vanlig_vann_per_min * $dusjtid). ' liter n&aring;r du dusjer <br>';
  print 'Du bruker ' .(($vanlig_vann_per_min * $dusjtid)*($varme_vann_per_liter_cal*($vanntemperaturforti-$vanntemperaturkald))). ' kalorier energi til &aring varme vannet (hvis vannet er p&aring; 40 &#8451;)';
}
elseif ($dusjhode == 'spare') {
  print 'Du bruker ' .($spare_vann_per_min * $dusjtid). ' liter n&aring;r du dusjer <br>';
  print 'Du bruker ' .(($spare_vann_per_min * $dusjtid)*($varme_vann_per_liter_cal*($vanntemperaturforti-$vanntemperaturkald))). ' kalorier energi til &aring varme vannet (hvis vannet er p&aring; 40 &#8451;)';
}
?>
    <br><br>
  </body>
</html>
