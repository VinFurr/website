<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

}
$tall_a = $_POST;
$tall_b = $_POST;

print .$tall_a. '+' .$tall_b. '=' $tall_a+$tall_b;
print .$tall_a. '-' .$tall_b. '=' $tall_a-$tall_b;
Print .$tall_a. '*' .$tall_b. '=' $tall_a*$tall_b;
Print .$tall_a. '/' .$tall_b. '=' $tall_a/$tall_b;

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

      Navn: <input type="text" size="20" name="tall_a"><p>
      Navn: <input type="text" size="20" name="tall_b"><p>
      <input type="submit" name="submit" value ="submit form">
    </body>
  </html>';
print date("d.m.Y")
 ?>
