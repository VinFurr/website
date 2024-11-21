<!DOCTYPE html>
<html>
  <head>
    <title>Om</title>
    <link rel="icon" href="./ikon/question.jpg">
<!--    <link rel="stylesheet" href="./css/index.css"> -->
  <style>
    body {
        background-repeat: no-repeat ;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        background-color: rgb(0, 128, 255);
        margin: auto;
        background-image: url("./bilder/nintendowinter.jpg");
    }


    .centeri {
      position: absolute;
      top:100;
      width: 1000px;
      height: 600px;
      background-color: white;
      margin-left: auto;
      margin-right: auto;
      left: 0;
      right: 0;
      z-index: -1;
      opacity: 0.6;
    }

    .center {
      position: absolute;
      top: 100;
      width: 1000px;
      height: 600px;
      text-align: center;
      z-index: 0;
      margin-left: auto;
      margin-right: auto;
      left: 0;
      right: 0;
      }


          ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: black;

          }

          li {
            float: left;
          }

          li a, .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 10px 16px;
            text-decoration: none;
          }

          li a:hover, .dropdown:hover .dropbtn {
            background-color: green;
          }

          li.dropdown {
            display: inline-block;
          }

          .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgb(249, 249, 249)
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
          }

          .dropdown-content a {
            color: white;
            padding: 5px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
          }

          .dropdown-content a:hover {background-color: green}

          .dropdown:hover .dropdown-content {
            display: block;
            background-color: black;
          }


    </style>
  </head>
  <body>
    <!--Menylinje-->
    <?php
    include ("./navbar.php")
    ?>
    <!--<ul>
      <li><a href="./index.html"       target="">Hjem</a></li>
      <li><a href="./musikk.html"      target="">Musikkliste</a></li>
      <li><a href="./splatoon.html"    target="">Splat</a></li>
      <li class="dropdown">
        <a href="arbeid.php" class="dropbtn">Arbeid... &#x25BC;</a>
        <div class="dropdown-content">
          <a href="#" target=""> Oppgaver</a>
          <a href="#" target=""> Oppgaveark</a>
          <a href="#" target=""> Pr&oslash;ver</a>
          <a href="#" target=""> Diverse</a>
      </li>
      <li><a href="./vincent.html"    target="">Om meg</a></li>
    </ul>-->
      <div class="centeri">
        <!--<img  src="./bilder/innholdsboks.png" height="600px" width="1000px">-->
      </div>
      <div class="center">
          <h1>Vincent Sun</h1>
          <p>Alder: 19&aring;r</p>
          <p>Bosted: Oslo</p>
          <p>F&oslash;dselsdag: 7 Februar 1999</p>
          <p>Liker: Nintendo, penger, Pokemon </p>
          <p>Misliker: Mobbere, Hjemmearbeid, Sterk mat</p>
          <br>
          <h3>Utdanning</h3>
          <p>1-7 klasse: Grorud barneskole</p>
          <p>8-9 klasse: Ryenberget barne/ungdomsskole</p>
          <p>10 klasse: Hauketo ungdomsskole</p>

          <p>VG1 Reastaurant-og matfag: Etterstad Vgs.</p>
          <p>VG1 Elektrofag: Kuben Vgs.</p>
          <p>VG2 Elenergi: Kuben Vgs.</p>
          <p>VG3 P&aring;bygg: Kuben Vgs.</p>
          <br><br>
          <audio loop autoplay controls><source src="./musikk/nintendo/Nintendo eShop January 2019.mp3"></audio>
      </div>
  </body>
</html>
