<?php

#################################################################
# Campingplass-eksempel. Database med 2 tabeller.                 #
# © Peter M.M. Rasmussen.                                       #
# Filnavn: opprett_plass_registrere.php                            #
#################################################################

$kundenr = $_POST ['kundenr'];
$bordnr = $_POST ['bordnr'];
$dato = $_POST ['dato'];
$klokke_fra = $_POST ['klokkeslett_fra'];
$klokke_til = $_POST ['klokkeslett_til'];
$kommentar = $_POST ['kommentar'];

include ("./32B_db_connection.php");

print $kundenr. '<br>' .$bordnr. '<br>' .$klokke_fra. '<br>' .$klokke_til. '<br>' .$kommentar;
// plass opprettes i database.
$sql = "INSERT INTO Vincent_tbl_reservasjoner (KundeID, BordID, Dato, Klokkeslett_fra, Klokkeslett_til, Kommentar)
VALUES ( '$kundenr', '$bordnr', '$dato', '$klokke_fra', '$klokke_til', '$kommentar')";

mysqli_query ($lenke, $sql);

mysqli_close($tilkopling);
mysqli_close($lenke);

print'
<!--- Melding på skjerm om at plassregistrering er opprettet.--->
<HTML>
  <head>
    <link rel="icon" type="image/gif" href="" ></link>
    <style>
      body {
        background-color: rgb(0, 128, 255);
        position: absolute;
        left: 5%;
        right:5%;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h2>Bordreservasjon opprettet</h2><p>
    <a href="./32B_reservasjon_registrer.php" target="_top"style="text-decoration:none"><button>regisrtrer nytt bord</button></a>
  </body>
</HTML>';
?>
