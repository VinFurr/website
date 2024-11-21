<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


$liter = $_POST['liter'];
$literpris = $_POST['pris_per_liter'];
$gallonpris = ($literpris / 3.785411784);
$antallvarer = $_POST['antall_varer'];
}

 
print '
  <html>
    <head>
      <title>20ABC</title>
      <link rel="icon" type="image/gif" href="" ></link>
      <style>
        body {
          background-color: rgb(0, 128, 255);
          position: absolute;
          left: 5%;
          right:5%;
          text-align: center;
        }
      </style>
    </head>
    <body>
      <h1>20ABC omregning</h1>
      <form name="personal" action="" method="POST">
      antall liter: <input type="text" size="20" name="liter"><p>';
print $literny. ' liter tilsvarer ' .($literny * 3.785411784). ' galloner <br><br>';
print 'pris per liter: <input type="text" size="20" name="pris_per_liter"><p>
      antall varer: <input type="text" size="20" name="antall_varer"><p>
      <input type="submit" name="submit" value ="submit form"><br><br>';
print 'hvis 1 liter koster ' .$literpris. 'kr s&aring; vil 1 gallon koste ' .$gallonpris. 'kr <br><br>';
print 'kj&oslash;per du ' .$antallvarer. ' liter vil det tilsvare ' .($antallvarer/3.785411784). ' galloner og det vil koste ' .($antallvarer*$literpris). 'kr';
print'
      <br><br><br><br>
    </body>
  </html>';
print date("d.m.Y")
 ?>
