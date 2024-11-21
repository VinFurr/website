<?php

//HUSK Å GI TABELLEN RETT NAVN.

$sitat = $_POST ['sitat'];
$opprinnelse = $_POST ['opprinnelse'];
$referanse = $_POST ['referanse'];

include ("./28B_database-logg_inn.php");
/*æøåÆØÅ fikset*/
  $sitat = str_replace('æ', '&aelig;', $sitat);
  $sitat = str_replace('Æ', '&AElig;', $sitat);
  $sitat = str_replace('ø', '&oslash;', $sitat);
  $sitat = str_replace('Ø', '&Oslash;', $sitat);
  $sitat = str_replace('å', '&aring;', $sitat);
  $sitat = str_replace('Å', '&Aring;', $sitat);

  $opprinnelse = str_replace('æ', '&aelig;', $opprinnelse);
  $opprinnelse = str_replace('Æ', '&AElig;', $opprinnelse);
  $opprinnelse = str_replace('ø', '&oslash;', $opprinnelse);
  $opprinnelse = str_replace('Ø', '&Oslash;', $opprinnelse);
  $opprinnelse = str_replace('å', '&aring;', $opprinnelse);
  $opprinnelse = str_replace('Å', '&Aring;', $opprinnelse);

  $referanse = str_replace('æ', '&aelig;', $referanse);
  $referanse = str_replace('Æ', '&AElig;', $referanse);
  $referanse = str_replace('ø', '&oslash;', $referanse);
  $referanse = str_replace('Ø', '&Oslash;', $referanse);
  $referanse = str_replace('å', '&aring;', $referanse);
  $referanse = str_replace('Å', '&Aring;', $referanse);
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
