<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $eksempel = $_POST['eksempel'];
  $tekst = $eksempel;

  $lengde_av_streng = strlen($tekst);
  $antall_karakterer = strlen(count_chars($tekst, 3));

  print 'Streng = '.$tekst.'<br>';
  print 'Lengde = '.$lengde_av_streng.'<br>';
  print 'Antall forskjellige tegn = '.$antall_karakterer.'<br>';

  $forskjell = ($lengde_av_streng - $antall_karakterer);

  print 'Forskjell paa lengde og antall = '.$forskjell.'<br>';
}

?>
  <html>
    <head>
      <title>25A</title>
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
    <form name="personal" action="" method="POST">
      Navn: <input type="text" size="20" name="eksempel"><p>
      <input type="submit" name="submit" value ="submit form">
    </body>
  </html>
<?php
print date("d.m.Y")
?>
