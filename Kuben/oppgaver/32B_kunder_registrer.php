<?php

?>

  <html>
    <head>
      <title>32B registrer kunder</title>
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
      <h1>32B registrer kunder</h1>
      <p><h2>registrer kunder</h2>
      <form method = "POST" action = "./32B_kunder_opprettet.php" name= "kunder" >
        <table>
          <tr><td>Navn</td><td><input type = "text" name="navn"size="40"value=""></td></tr>
          <tr><td>Etternavn</td><td><input type = "text" name="etternavn"size="40"value=""></td></tr>
          <tr><td>Telefon</td><td><input type = "text" name="telefon"size="40"value=""></td></tr>
          <tr><td>e-post</td><td><input type = "text" name="epost"size="40"value=""></td></tr>
          <tr><td>Kommentar</td><td><input type = "text" name="kommentar"size="40"value=""></td></tr>
          <!---
          <tr><td>Opprettet</td><td><input type = "text" name="opprettet"size="40"value=""></td></tr>
          <tr><td>Sluttet</td><td><input type = "text" name="sluttet"size="40"value=""></td></tr>
          --->
        </table><p>
        <input type ="submit" value= "registrer kunde" name="registrer kinde">
        <inputtype ="reset" value = "Fjern info i skjema" name="fjern_skjemainfo"></p>
      </form>
    </body>
  </html>
