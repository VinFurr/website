<?php 

#################################################################
# elevfag-eksempel. Database med 3 tabeller.                    #
# mange-til-mange relasjon.                                     #
# Peter M.M. Rasmussen.                                         #
# Filnavn: elev_opprett_registrere.php                          #
#################################################################

$personnr = $_POST ['personnr'];
$fornavn = $_POST ['fornavn'];
$etternavn = $_POST ['etternavn'];
$gatenavn = $_POST ['gatenavn'];
$poststed = $_POST ['poststed'];
$postnr = $_POST ['postnr'];
$land = $_POST ['land'];
$nasjonalitet = $_POST ['nasjonalitet'];
$opprettet = date("Y-m-d");
//$opprettet = $_POST['opprettet'];
//$sluttet= $_POST ['sluttet'];
$kommentar = $_POST['kommentar'];

include ("./db_connection.php");

// kunde opprettes i database.
$sql = "INSERT INTO tbl_elev (personnr, fornavn, etternavn, gatenavn, poststed, postnr, land, nasjonalitet,opprettet, sluttet, kommentar)
VALUES ('$personnr', '$fornavn ', '$etternavn', '$gatenavn', '$poststed', '$postnr', '$land', '$nasjonalitet','$opprettet', '$sluttet', '$kommentar')";

mysqli_query ($lenke, $sql);

mysqli_close($tilkopling);
mysqli_close($lenke);

print '
<!--- Melding p? skjerm om at kunde er opprettet.--->
<HTML><head></head>
<body>
<h2>kunde er opprettet</h2><p>
<a href="./opprett_kunde_skjema.html" target="middle_center"
style="text-decoration:none"><button>Ny kunde</button></a>
</body></HTML>
';
?>
