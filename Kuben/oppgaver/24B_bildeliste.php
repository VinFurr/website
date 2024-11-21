<?PHP
//Opprette variabler.
$folder = "";
$file = "";
//$files[] = "";
//OBS. Ha klamme [] etter variabelnavn om det er en array som deklareres.
//Deklarasjon av $files[] er tatt bort for PHPv7.

//OBS. Om det ikke virker etter endring, sjekk om $folder har "/" på slutten.

$folder = "./";
$bilde = opendir($folder);

//Opprette array som inneholder filene i katalogen som er angitt i variabel $folder:
while ($file = readdir($bilde)) //Loop gjennom mappen.
{
//Her finner scriptet hvilken extension, filtype, som filen har.
$pathinfo = pathinfo($file);

//Her sorteres, kun jpg-filer og gif-filer legges i array.
if ($pathinfo['extension'] == "jpg" || $pathinfo['extension'] == "gif" ||$pathinfo['extension'] == "png" ||$pathinfo['extension'] == "jpeg"){

//Her legges fil i array
$files[] = $file;
}
}

closedir($bilde);
#Overskrift etc.
print '
<h2>Eksempel 171. Bildene i min katalog</h2><p>
';

foreach ($files as $file) {
print '<img src = "'.$folder.$file.'">';
print '<p>';
}
?>
