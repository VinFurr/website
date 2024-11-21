<?php
$navn = $_POST ['navn'];
$etternavn = $_POST ['etternavn'];
$telefon = $_POST ['telefon'];
$epost = $_POST ['epost'];
$personer = $_POST ['personer'];
$dato = date("Y-m-d");
//$opprettet = $_POST['opprettet'];
//$sluttet= $_POST ['sluttet'];
$kommentar = $_POST['kommentar'];
//$id = "";
$ankomst = $_POST['ankomst'];
$avreise = $_POST['avreise'];
include ("./db_connection.php");

// kunde opprettes i database.
/*
$sql = "INSERT INTO Vincent_tbl_kunder (Navn, Etternavn, Telefon, e-post, Kommentar, Dato)
VALUES ('$navn', '$etternavn', '$telefon', '$epost', '$kommentar', '$dato')";
*/
$sql = "INSERT INTO Vincent_tbl_kunde2 (Navn, Etternavn, Telefon, epost, Personer, Kommentar, Dato, Ankomst, Avreise)
  VALUES ('$navn', '$etternavn', '$telefon','$epost', '$personer', '$kommentar', '$dato', '$ankomst', '$avreise')";
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
    Telefon= '.$telefon.'<br>
    E-post= '.$epost.'<br>
    Antall personer= '.$personer.'<br>
    Dato= '.$dato.'<br>
    Kommentar= '.$kommentar.'<br>
    Ankomst= '.$ankomst.'<br>
    Avreise= '.$avreise.'<br>
    <a href="./del2 kunderegistrering ankomst og avreise.php" target="middle_center"style="text-decoration:none"><button>Registrer ny kunde</button></a>
  </body>
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
