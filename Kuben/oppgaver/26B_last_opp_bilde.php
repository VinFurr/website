<?php
if(empty($_FILES['filbane']['name'])) {
  die ("<p> Ingen fil blev valgt </p>");
}
else {
  //$temp_fil er et midlertidig navn bestemt i php.ini
  $temp_fil = $_FILES['filbane']['tmp_name'];
  //Blir for eksempel bilder/navn.jpg
  $filnavn = "./26B/" . $_FILES['filbane']['name'];
  //Må derfor kopiere fra denne over til et kjent sted/navn
  move_uploaded_file($temp_fil, $filnavn)
    or die ("En feil oppstod, kunne ikke kopiere fil");

  //MIMI-typen til filen
  $filtype = $_FILES['filbane']['type'];
  //størrelsen
  $storrelse = $_FILES['filbane']['size'];

  //Skriv ut kvittering.
  print "<h3>Dette bildet ble lastet opp</h3>";
  //vis bildet hvis det har nevnte filtype.
  if(strstr($filtype, "jpeg") || strstr($filtype, "gif") || strstr($filtype, "bmp") || strstr($filtype, "png") ) {
    print "<img src = '$filnavn' height='200' align='right' />";
  }
  //Vis filnavn, type og størrelse.
  print "Filnavn: $filnavn <p>";
  print "Type: $filtype<p>";
  print "St&oslash;rrelse: $storrelse byte <p>";
  print "<a href = './26B_last_opp_bilde.html'><button>Last opp nytt bilde</button>";
}
?>
