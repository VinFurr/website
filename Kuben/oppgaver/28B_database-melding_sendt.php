<?php

//HUSK � GI TABELLEN RETT NAVN.

$sitat = $_POST ['sitat'];
$opprinnelse = $_POST ['opprinnelse'];
$referanse = $_POST ['referanse'];

include ("./28B_database-logg_inn.php");
/*������ fikset*/
  $sitat = str_replace('�', '&aelig;', $sitat);
  $sitat = str_replace('�', '&AElig;', $sitat);
  $sitat = str_replace('�', '&oslash;', $sitat);
  $sitat = str_replace('�', '&Oslash;', $sitat);
  $sitat = str_replace('�', '&aring;', $sitat);
  $sitat = str_replace('�', '&Aring;', $sitat);

  $opprinnelse = str_replace('�', '&aelig;', $opprinnelse);
  $opprinnelse = str_replace('�', '&AElig;', $opprinnelse);
  $opprinnelse = str_replace('�', '&oslash;', $opprinnelse);
  $opprinnelse = str_replace('�', '&Oslash;', $opprinnelse);
  $opprinnelse = str_replace('�', '&aring;', $opprinnelse);
  $opprinnelse = str_replace('�', '&Aring;', $opprinnelse);

  $referanse = str_replace('�', '&aelig;', $referanse);
  $referanse = str_replace('�', '&AElig;', $referanse);
  $referanse = str_replace('�', '&oslash;', $referanse);
  $referanse = str_replace('�', '&Oslash;', $referanse);
  $referanse = str_replace('�', '&aring;', $referanse);
  $referanse = str_replace('�', '&Aring;', $referanse);
//sitat opprettes i database
$sql= "INSERT INTO Vincent_tabell (sitat, opprinnelse, referanse) VALUES ('$sitat', '$opprinnelse', '$referanse')";

mysqli_query($lenke, $sql);
mysqli_close($tilkopling);
mysqli_close($lenke);

?>

<!---Melding p&aring; skjerm om at sitat er opprettet.-->
<html>
  <head>
    <style media="screen">
    </style>
  </head>
  <body>
    <h2> Melding sendt </h2><p>
    <a href="./28B_database-skriv_melding.html" target="middle_center" style="text-decoration:none"><button>Ny melding</button></a>
    <br>
    <a href="./28B_database-vis_meldinger.php"><button>se meldinger fra bes&oslash;kende</button></a>
  </body>
</html>
