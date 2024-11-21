<?php

//HUSK AT SETTE INN RETT TABELLNAVN.

########### List alle fag. ##############

$elevident = "";
$personnummer = "";
$fagID = "";
$opprettet = date("Y-m-d");

$elevident = $_POST['elevident'];
$personnummer = $_POST['personnr'];
$fagID = $_POST['fagID'];

if ($elevident != 0) {
    print "Du valgte elevID: ";
    print $elevident;
    print '.<p>';
    print "Du valgte fagID: ";
    print $fagID;
    print '.<p>';
}
if ($personnummer != 0) {
    print "Du valgte personnr: ";
    print $personnummer;
    print '.<p>';
    print "Du valgte fagID: ";
    print $fagID;
    print '.<p>';


    $teller = 0;
    include("./db_connection.php");
    $sql = "SELECT elevID FROM tbl_elev WHERE (personnr = '$personnummer')";
    mysqli_query ($lenke, $sql);

    mysqli_close($tilkopling);
    mysqli_close($lenke);

    while ($row = mysqli_fetch_array($resultat)) {
    $elevID_reg[$teller] = $row["elevID"];
    $elevident = $elevID_reg[$teller];
    $teller = $teller+1;
    }

}

    $tellerA = 0;
    include("./db_connection.php");
    $sql = "SELECT * FROM tbl_elevfag WHERE (elevID = '$elevident' AND fagID = '$fagID')";

    mysqli_query ($lenke, $sql);

    mysqli_close($tilkopling);
    mysqli_close($lenke);

    while ($row = mysqli_fetch_array($resultat)) {
    $elevfagID[$tellerA] = $row["elevfagID"];
    $elevID[$tellerA] = $row["elevID"];
    $fagID[$tellerA] = $row["fagID"];
    $opprettet[$tellerA] = $row["opprettet"];
    $sluttet[$tellerA] = $row["sluttet"];
    $kommentar[$tellerA] = $row["kommentar"];

    $tellerA = $tellerA+1;
    }

    if ($tellerA == 0) {

    include ("./db_connection.php");
    $sql = "INSERT INTO tbl_elevfag (elevID, fagID, opprettet, sluttet, kommentar)
    VALUES ('$elevident', '$fagID', '$opprettet', '$sluttet', '$kommentar')";

    mysqli_query ($lenke, $sql);

    mysqli_close($tilkopling);
    mysqli_close($lenke);

    print 'Elev er lagt til fag.';

    }

    if ($tellerA != 0) {
    print 'Elev finns allerede som deltaker på faget.';
    }


?>
