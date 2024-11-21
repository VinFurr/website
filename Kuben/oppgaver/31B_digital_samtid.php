<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $digital_samtid = $_POST['ds'];
  $mediers_rolle = $_POST['mr'];
  $ungdom_digitale_medier = $_POST['udm'];
  $digitale_medier_brukes_miusbrukes = $_POST['dmbm'];
}
?>
<!--IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII-->
<html>
  <head>
    <title>Oppgave 31B</title>
    <link rel="icon" type="image/gif" href="#" ></link>
    <style>
    body {
      background-color: rgb(0, 128, 255, 0.5);
      position: absolute;
      left: 5%;
      right:5%;
      text-align: center;
    }
    </style>
  </head>
  <body>
    <h1>31B Digital samtid</h1>

    <form name="personal" action="" method="POST">
      <input type="submit" size="10" style="height:33px;width:200px" value="Digital samtid" name="ds">
      <input type="submit" size="10" style="height:33px;width:200px" value="Mediers rolle" name="mr">
      <input type="submit" size="10" style="height:33px;width:200px" value="Ungdom & digitale medier" name="udm">
      <input type="submit" size="10" style="height:33px;width:200px" value="Bruk og misbruk" name="dmbm">
    </form>
<!--IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII-->
<?php
if ($digital_samtid == 'Digital samtid') {
  print 'Finnes mange thing digitale medier kan brukes til.<br>Nyheter, kommunikasjon, bildedeling, pengetransaksjon, underholdning, handel osv...';
}
elseif ($mediers_rolle =='Mediers rolle') {
  print 'De digitale medienes rolle er helt forskjellige. Noen viser videoer som Youtube, mens andre viser Nyheter som NRK';
}
elseif ($ungdom_digitale_medier == 'Ungdom & digitale medier') {
  print 'Ungdom bruker digitale sosiale medier som Facebook, Snapchat og Instagram';
}
elseif ($digitale_medier_brukes_miusbrukes == 'Bruk og misbruk') {
  print 'Digitale medier kan brukes til kommunikasjon, handel, spill, se filmer & videoer, se nyheter osv...
  <br>Digitale medier kan misbrukes til &aring; svindle folk, mobbing og annet ulovlig...';
}
else {
  print 'Velg en knapp ovenfor';
}
?>
<!--IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII-->
  </body>
</html>
