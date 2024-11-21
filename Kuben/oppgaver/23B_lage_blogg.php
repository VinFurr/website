<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$innlegg_raw = $_POST['innlegg_fil'];

$innlegg_1 = str_replace("<","&#60;", $innlegg_raw);
$innlegg_2 = str_replace(">","&#62;", $innlegg_1);
$innlegg_3 = str_replace("$","&#36;", $innlegg_2);
$innlegg_4 = str_replace("?","&#63;", $innlegg_3);
$innlegg_5 = str_replace("'","&#39;", $innlegg_4);
$innlegg = str_replace("/","&#47;", $innlegg_5);

$eksempel = fopen("./23B_lage_blogg.txt", "a") or die("Kan ikke opne filen!");
$tekst = $innlegg;
$tekst .= "\r\n";
fwrite($eksempel, $tekst);
fclose($eksempel);

print "<h1>Takk for ditt innlegg.</h1>";
print "Du skrev: " . $innlegg . ".<p>" ;
print "Nå kan du skrive ett nytt innlegg her; <p><hr> ";
}

print '

<html>
<head>
</head>
<body>

<form name="innlegg" action="" method="POST">
Skriv her ditt innlegg: <p>
<textarea rows="4" cols="50" name="innlegg_fil">
</textarea>
<p>
<input type="submit" name="submit" value ="submit form">
</form>

</body>
</html>
';

?>
