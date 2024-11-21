<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$navn = $_POST['navn'];


print 'Hei ' . $navn . '! <p>velkommen til min nettside.<p>';
}

print '
  <html>
    <head>
      <title>19A</title>
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
      <h1>19B</h1>
      <form name="personal" action="" method="POST">
      Navn: <input type="text" size="20" name="navn"><p>
      <input type="submit" name="submit" value ="submit form">
      <br><br>
    </body>
  </html>';

 ?>
