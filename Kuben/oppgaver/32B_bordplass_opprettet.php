<?php

#################################################################
# Campingplass-eksempel. Database med 2 tabeller.                 #
# © Peter M.M. Rasmussen.                                       #
# Filnavn: opprett_plass_registrere.php                            #
#################################################################

$bordnr = $_POST ['bordnr'];
$antallplasser = $_POST ['antallplasser'];
$handikap = $_POST ['handikap'];
$kommentar = $_POST ['kommentar'];

include ("./32B_db_connection.php");

print $bordnr.'<br>' .$antallplasser. '<br>' .$handikap. '<br>' .$kommentar;
// plass opprettes i database.
$sql = "INSERT INTO Vincent_tbl_bord (Bordnr, AntallPlasser, Handikap, Kommentar)
VALUES ('$bordnr', '$antallplasser', '$handikap', '$kommentar')";

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
    <h2>Plass er opprettet</h2><p>
    <a href="./32B_registrer_bordplass.php" target="_top"style="text-decoration:none"><button>regisrtrer nytt bord</button></a>
  </body>
</HTML>';
?>
