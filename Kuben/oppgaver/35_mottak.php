<?php

$stemme = $_POST['stem'];
?>
<HTML>
  <head>
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
    <h2>Eksempel 303. Mottak av stemmer.</h2><br>
    Stemme merket
    <?php
    print $stemme;
    ?><br>
    er mottatt
<!--- Melding på skjerm om at plassregistrering er opprettet.--->
    <button onclick="goBack()">Tilbake til forrige side</button>
    <script>
      function goBack() {
        window.history.back();
      }
    </script>
  </body>
</HTML>';
