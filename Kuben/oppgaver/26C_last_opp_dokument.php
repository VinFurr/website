<?php
if(empty($_FILES['filbane']['name'])) {
  die ("<p> Ingen fil ble valgt </p>");
}
else {
  //$temp_fil er et midlertidig navn bestemt i php.ini
  $temp_fil = $_FILES['filbane']['tmp_name'];
  //Blir for eksempel bilder/navn.jpg
  $filnavn = "./26C/" . $_FILES['filbane']['name'];
  //Må derfor kopiere fra denne over til et kjent sted/navn
  move_uploaded_file($temp_fil, $filnavn)
    or die ("En feil oppstod, kunne ikke kopiere fil");

  //MIMI-typen til filen
  $filtype = $_FILES['filbane']['type'];
  //størrelsen
  $storrelse = $_FILES['filbane']['size'];

  //Skriv ut kvittering.
  print "<h3>Dette dokumentet ble lastet opp</h3>";
  //vis bildet hvis det har nevnte filtype.
  if(strstr($filtype, "txt") || strstr($filtype, "doc") || strstr($filtype, "dot")
  || strstr($filtype, "wbk") || strstr($filtype, "docx") || strstr($filtype, "docm")
  || strstr($filtype, "dotx") || strstr($filtype, "dotm") || strstr($filtype, "docb") ) {
    print "<img src = '$filnavn' height='200' align='right' />";
  }
  //Vis filnavn, type og størrelse.
  print "Filnavn: $filnavn <p>";
  print "Type: $filtype<p>";
  print "St&oslash;rrelse: $storrelse byte <p>";
  print "<a href = './26C_last_opp_dokument.html'><button>Last opp nytt dokument</button>";
}
?>
