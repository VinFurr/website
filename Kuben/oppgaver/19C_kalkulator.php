<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$tall_a = $_POST['tall_a'];
$tall_b = $_POST['tall_b'];

print "Start resultat<br>";
print $tall_a." og ".$tall_b." gir som svar: <br> " ;
print $tall_a. '+' .$tall_b. '=' .($tall_a + $tall_b). '<br>';
print $tall_a. '-' .$tall_b. '=' .($tall_a - $tall_b). '<br>';
print $tall_a. '*' .$tall_b. '=' .($tall_a * $tall_b). '<br>';
print $tall_a. '/' .$tall_b. '=' .($tall_a / $tall_b). '<br>';
}

print '
  <html>
    <head>
      <title>19C kalkulator</title>
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
      <h1>19C</h1>
      <form name="personal" action="" method="POST">

      Tall1 <input type="text" size="20" name="tall_a"><p>
      Tall2 <input type="text" size="20" name="tall_b"><p>
      <input type="submit" name="submit" value ="submit form">
    </body>
  </html>';

 ?>
