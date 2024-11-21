<?php

$tempvarioasjon = 0.65; /*variasjon for hver 100 meter*/
/*
$hoyde_naa_justert = str_replace(",",".",$hoyde_naa);
$temperatur_naa_justert = str_replace(",",".",$temperatur_naa);
$hoyde_onsket_justert = str_replace(",",".",$hoyde_onsket);
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$hoyde_naa = $_POST['hoyde'];
$temperatur_naa = $_POST['temperatur'];
$hoyde_onsket = $_POST['ny_hoyde'];
}


print '
  <html>
    <head>
      <meta charset="windows-1252">
      <title>20DE</title>
      <link rel="icon" type="image/gif" href="" ></link>
      <style>
        body {
          background-color: rgb(0, 128, 255);
          position: absolute;
          left: 5%;
          right:5%;
          text-align: center;
          margin: auto;
          width: 600px;
        }

        .centeri {
          position: absolute;
          top:100;
          width: 600px;
          height: 600px;
          background-color: white;
          margin-left: auto;
          margin-right: auto;
          left: 0;
          right: 0;
          z-index: -1;
          opacity: 0.6;
          top:0;
      </style>
    </head>
    <body>
      <div class="centeri"></div>
      <h1>20DE h&oslash;yde og temperatur</h1>
      <form name="personal" action="" method="POST">
      N&aring;v&aelig;rende h&oslash;yde: <input type="text" size="10" name="hoyde"> meter<p>
      N&aring;v&aelig;rende temperatur:   <input type="text" size="10" name="temperatur"> grader<p>
      &Oslash;nsket h&oslash;yde:         <input type="text" size="10" name="ny_hoyde"> meter<p>
      <input type="submit" name="submit" value ="submit form"><br><br>';
print '<br><br>';
print 'Din n&aring;v&aelig;rende h&oslash;yde er ' .$hoyde_naa. ' meter <p>
      Din n&aring;v&aelig;rende temperatur er ' .$temperatur_naa. ' grader<p>
      Din &oslash;nsket h&oslash;yde er ' .$hoyde_onsket. ' meter <p>
      Temperaturen i ditt &oslash;nsket h&oslash;yde er ' .((($hoyde_naa-$hoyde_onsket)/100)*$tempvarioasjon+$temperatur_naa). ' grader';
print'
      <br><br><br><br>
    </body>
  </html>';
print date("d.m.Y");
print '<br><br><br>';

print 'Oppgave 20E er vel en formel hvor den kan regne ut temperatur som b&aring;de kan v&aelig;re h&oslash;yere eller lavere? Is&aring;fall s&aring; er den allerede laget';
 ?>
