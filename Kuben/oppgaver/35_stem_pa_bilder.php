<?php


//Her er funksjon er som seinere brukes;

function bilde($teller, $folder, $file) {
    print '<form action="./35_mottak.php" method="POST"> '; // Lager form.
    print '<td>'; //Lager rad og felt i rad til bilde.
    print '<img src = "'.$folder.$file.'" style="height:150px;width:250px; ">';
    print '</td><td>'; // Lager nytt felt i rad med plass til stemmeknapp.
    print     '<input type="hidden" name="stem" value="'.$file.' "> <input type="submit" value="Stem p&aring; bilde">'; //Denne linje er ny.
    // Legger bildets navn i en skjult melding med navn "stem" slik det kan sendes til filen "stemmer_mottak.php".
    // Lager stemmeknapp.
    print '</td></form>'; // Avslutter rad i tabell, avslutter form.
    $teller = $teller +1;
    return $teller;
}

function nyrad($teller, $folder, $file) {
    print '</tr><tr>';
    $teller = 0;
    //bilde ($teller, $folder, $file);
    return $teller;

}


//Opprette variabler.
$folder = "";
$file = "";
$files = [];
//OBS. Om det ikke virker etter endring, sjekk om $folder har "/" på slutten.

$folder = "./../bilder/";
$bilde = opendir($folder);

//Opprette array som inneholder filene i katalogen som er angitt i variabel $folder:
while ($file = readdir($bilde)) //Loop gjennom mappen.
{

$pathinfo = pathinfo($file);

if ($pathinfo['extension'] == "jpg" || $pathinfo['extension'] == "jpeg" || $pathinfo['extension'] == "png" || $pathinfo['extension'] == "gif" ){

//Her legges fil i array
$files[] = $file;
}
}

closedir($bilder);

print '
<html>
<head> </head>
<body>
<h2>Eksempel 301. Løsning på del av prosjektoppgave, vis bilder.</h2><p>';


print '<table><tr>'; // lager tabell.

$teller = 0;    //Oppretter teller;

foreach ($files as $file) {

if ($teller < 3) {
    $teller = bilde($teller, $folder, $file);          //Her er et funksjonskall til funksjonen bilde.
}

elseif($teller >=3) {
    $teller = nyrad($teller, $folder, $file);
    $teller = bilde($teller, $folder, $file);
}

else {
    print 'Teller feilet';
}

}

print '</table>';   // Avslutter tabell.
print '</html>';  // Avslutter html.



?>
