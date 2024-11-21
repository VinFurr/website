<?php
$navn = $_POST ['navn'];
$etternavn = $_POST ['etternavn'];
$telefon = $_POST ['telefon'];
$epost = $_POST ['epost'];
$dato = date("Y-m-d");
//$opprettet = $_POST['opprettet'];
//$sluttet= $_POST ['sluttet'];
$kommentar = $_POST['kommentar'];
//$id = "";
include ("./32B_db_connection.php");

// kunde opprettes i database.
/*
$sql = "INSERT INTO Vincent_tbl_kunder (Navn, Etternavn, Telefon, e-post, Kommentar, Dato)
VALUES ('$navn', '$etternavn', '$telefon', '$epost', '$kommentar', '$dato')";
*/
$sql = "INSERT INTO Vincent_tbl_kunder (Navn, Etternavn, Telefon, epost, Kommentar, Dato) VALUES ('$navn', '$etternavn', '$telefon','$epost','$kommentar', '$dato')";
mysqli_query ($lenke, $sql);

mysqli_close($tilkopling);
mysqli_close($lenke);

print '
<!--- Melding p? skjerm om at kunde er opprettet.--->
<HTML>
  <head>
  </head>
  <body>
    <h2>kunde er registrert</h2><p>
    Navn = '.$navn.'  <br>
    Etternavn = '.$etternavn.'<br>
    <a href="./32B_kunder_registrer.php" target="middle_center"style="text-decoration:none"><button>Registrer ny kunde</button></a>
  </body>
</HTML>
';?>
