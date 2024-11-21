<?php

$fornavn = $_POST ['fornavn'];
$etternavn = $_POST ['etternavn'];
$telefon = $_POST ['telefon'];
$epost = $_POST ['epost'];
$antallpersoner = $_POST ['antallpersoner'];
$ankomst = $_POST ['ankomst'];
$sjekkinn = $_POST ['sjekkinn'];
$kommentar = $_POST ['kommentar'];
$plassid = $_POST ['plassid'];

$ankomsttid = $dag.'.'.$maaned.'.'.$aar;

include ("./db_connection.php");

// kunde opprettes i database.
$sql = "INSERT INTO Vincent_tbl_kunde2 (Navn, Etternavn, Telefon, epost, Personer, Kommentar, Ankomst, SjekkInn)
VALUES ('$fornavn', '$etternavn', '$telefon', '$epost', '$antallpersoner', '$kommentar', '$ankomst', '$sjekkinn' )";

mysqli_query ($lenke, $sql);
mysqli_close($tilkopling);

include ("./db_connection.php");

$sql = "SELECT KundeID FROM Vincent_tbl_kunde2 ORDER BY KundeID DESC LIMIT 1";
$resultat = mysqli_query($lenke, $sql);
while($row=mysqli_fetch_array($resultat)) {
$kundeid=$row["KundeID"];
}


//Database 2


$sql = "UPDATE Vincent_tbl_bordplass2 SET KundeID = '$kundeid' WHERE PlassID = '$plassid'";
$resultat = mysqli_query($lenke, $sql);
mysqli_close ($tilkopling);
mysqli_close ($lenke);

print "
<HTML>
  <head>
  </head>
  <body><center>
  oppdatering utf&oslash;rt. <br>";
print "Bordnr = " .$plassid. "<br>";
print "KundeID = " .$kundeid;


?>
<!--- Melding p skjerm om at kunde er opprettet.--->

    <h2>kunde er sjekket inn</h2><p>
      <a href="./del4 kunde sjekk inn.php"><button>sjekk inn ny kunde</button></a>
  </center></body></HTML>

  <?php
  include ("./index.php");
  ?>
