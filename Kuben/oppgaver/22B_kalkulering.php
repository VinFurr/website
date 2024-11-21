<?php
session_start(); // Start the session

if ($_SESSION['flagget'] != 1) {
$_SESSION['rett_svar'] = 0;
$_SESSION['feil_svar'] = 0;
}


function testSvar() {
$resultat = $_SESSION['result'];
$svarInn = $_SESSION['svarInn'];
print '<h2>Ditt svar er n&aring; analysert. </h2>';
Print 'Du har svart: ';
print $svarInn;
print '<p>';

if  ($svarInn == $resultat) {
$_SESSION['rett_svar'] = $_SESSION['rett_svar'] +1;
print 'Svaret er rett ! <p>';
print 'Antall rette svar er: ';
print $_SESSION['rett_svar'];
print '. Antall feil svar er: ';
print $_SESSION['feil_svar'];
}

else if  ($svarInn != $resultat){
$_SESSION['feil_svar'] = $_SESSION['feil_svar'] +1;
print 'Svaret er feil ! <p>';
print 'Antall rette svar er: ';
print $_SESSION['rett_svar'];
print '. Antall feil svar er: ';
print $_SESSION['feil_svar'];
}

}

$svaret = $_POST['svar'];
$flagg = $_POST['flagg'];
$_SESSION['flagget'] = $flagg;
$_SESSION['svarInn'] = $svaret;

if ($svaret !="" && $flagg == "1" ) {
testSvar();
}

else if ($svaret =="" && $flagg == "1" ) {
exit ('Hei. Du m&aring; skrive noe i svar-feltet! <a href="" style="text-decoration:none"><button>Prøv igjen</button>');
}

$kalkuler = mt_rand(0,3);
if ($kalkuler == 0) {
  $kalktype = '+';
}
elseif ($kalkuler == 1) {
  $kalktype = '-';
}
elseif ($kalkuler == 2) {
  $kalktype = '*';
}
elseif ($kalkuler == 3) {
  $kalktype = '/';
}

$tall1 = mt_rand(0,10);
$tall2 = mt_rand(0,10);
if ($kalktype == '+') {
  $result = $tall1+$tall2;
}
elseif ($kalktype == '-') {
  $result = $tall1-$tall2;
}
elseif ($kalktype == '*') {
  $result = $tall1*$tall2;
}
elseif ($kalktype == '/') {
  $result = $tall1/$tall2;
}

$_SESSION['result'] = $result;



print'
<html>
  <head></head>
  <style>
    body {
      background-color: rgb(0, 128, 255);
      position: absolute;
      left: 5%;
      right:5%;
      text-align: center;
    }

    .chart1 div {
      font: 10px sans-serif;
      background-color: steelblue;
      text-align: right;
      padding: 3px;
      margin: 1px;
      color: white;
    }
  </style>
  <body>
    <h2>Kalkulering av 2 tall mellom 0 og 10.</h2>

    Hva er svaret p&aring;.'
    .$tall1. ' ' .$kalktype. ' ' .$tall2. '
    <br><br>
    <center>
    <div class="chart1">
      Riktig: <div style="width: '.$_SESSION['rett_svar'].'px;">'.$_SESSION['rett_svar'].'</div>
      Feil: <div style="width: '.$_SESSION['feil_svar'].'px;">'.$_SESSION['feil_svar'].'</div>
    </div>
    </center>
<form action="';
print $_SERVER['PHP_SELF'];
print'" method="POST">
<input type="text" name="svar">
<input type="hidden" name="flagg" value="1">
<input type="submit">
</form>
</body>
</html>';

?>
