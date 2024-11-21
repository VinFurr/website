<?PHP
//Opprette variabler.
$folder = "";
$file = "";
//$files = "";
//OBS. Ha klamme [] etter variabelnavn om det er en array som deklareres.
//Deklarasjon av $files[] er tatt bort for PHPv7

//OBS. Om det ikke virker etter endring, sjekk om $folder har "/" på slutten.

$folder = "./";
$filListe = opendir($folder);

//Opprette array som inneholder filene i katalogen som er angitt i variabel $folder:
while ($file = readdir($filListe)) //Loop gjennom mappen.
{
//Her legges fil i array
$files[] = $file;
}

closedir($filListe);
#Overskrift etc.
print '
<h2>Eksempel 170. Filene i min katalog</h2><p>
';
//Lag buttons med filnavner og link til filen.
//Når man trykker på button vil filen åpnes i ny fane eller i program som fil-extension er knyttet til.
foreach ($files as $file) {
print '<a href = "'.$folder.$file.'" target = "_blank"><button style="height:25px;width:300px">'.$file.'</button></a>';
print '<br>';
}
?>
