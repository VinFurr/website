<?php
$bordnr = $_POST ['bordnr'];
$antallplasser = $_POST ['antallplasser'];
$handikap = $_POST ['handikap'];
$kommentar = $_POST ['kommentar'];

include ("./db_connection.php");

// kunde opprettes i database.
/*
$sql = "INSERT INTO Vincent_tbl_kunder (Navn, Etternavn, Telefon, e-post, Kommentar, Dato)
VALUES ('$navn', '$etternavn', '$telefon', '$epost', '$kommentar', '$dato')";
*/
$sql = "INSERT INTO Vincent_tbl_bordplass2 (PlassID, AntallPlasser, Handikap, Kommentar)
  VALUES ('$bordnr', '$antallplasser', '$handikap','$kommentar')";
mysqli_query ($lenke, $sql);

mysqli_close($tilkopling);
mysqli_close($lenke);

print '
<!--- Melding p&aring; skjerm om at kunde er opprettet.--->
<HTML>
  <head>
  </head>
  <body><center>
    <h2>Bord er registrert</h2><p>
    bordnr/id = '.$bordnr.'  <br>
    antall plasser = '.$antallplasser.'<br>
    handikap = '.$handikap.'  <br>
    kommentar = '.$kommentar.'  <br>
    <a href="./del2 bordplassregistrering.php"><button>Registrer nytt bord</button></a>
  </center></body>
</HTML>
';?>


<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<?php
include ("./index.php");
?>
