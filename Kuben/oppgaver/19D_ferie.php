<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$ferie = $_POST['ferie'];
$vaer = $_POST['vaer'];


print '
<html>
  <head>
  </head>
  <body>
    <center>
      <br<br><br><br><br><br>
      Du liker � v�re ' . $ferie . ' i ferien din <br>
      og du �nsker at det skal v�re ' . $vaer . '
    </center>
  </body>
</html>
';
}

print'

<html>
<head>
</head>
<body>
<center>

<form name="personal" action= "" method="POST">
Velg ditt ferie: <select name="ferie">
  <option value="p� stranden">Strand</option>
  <option value="hjemme">Hjemme</option>
  <option value="p� tur">Tur</option>
  <option value="p� reise">Reise</option>
</select>
<form name="personal" action= "" method="POST">
Velg v�r <select name="vaer">
  <option value="sol">Sol</option>
  <option value="regn">Regn</option>
  <option value="vind">Vind</option>
  <option value="snow">Sn�</option>
  <option value="overskyet">Overskyet</option>
</select>
<p>
<input type="submit" name="submit" value ="submit form">
</form>
</center>
</body>
</html>
';

?>
