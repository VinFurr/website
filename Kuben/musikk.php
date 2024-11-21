<!DOCTYPE html>
<html>
  <head>
    <title>Musikk</title>
    <link rel="icon" type="image/gif" href="./ikon/musikk.jpg" ></link>
    <link rel="stylesheet" href="./css/index.css">
  </head>


  <style>
    body{
      background-image: url();
      background-color: white;
    }
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    tr:nth-child(even) {
      background-color: #dddddd;
    }

    @font-face {
      font-family: myFirstFont;
      src: url("./font/paintball.otf");
    }

      .font {
        font-family: myFirstFont;
      }
  </style>


  <body>
      <!--menylinje-->
      <?php
      include ("./navbar.php")
      ?>
<!--      <ul>
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
    <!-- resten av siden-->
  <div class="text_placement">
    <h1>Musikk</h1>
      <table>
        <tr>
          <th>Navn</th>
            <th>Lydfil</th>
              <th>Hvor den kommer fra</th>
                <th>Spill/Film?</th>
        </tr>
        <tr>
          <td>Jeg har tro p&aring; deg</td>
            <td><audio controls loop><source src="./musikk/film/Zoroark, illusjonens mester - Jeg har tro pa deg.m4a"></audio></td>
              <td>Pok&eacute;mon - Zoroark, illusjonens mester</td>
                <th>Film</th>
        </tr>
        <tr>
          <td>File Select</td>
            <td><audio controls loop><source src="./musikk/PMD/PMD - File Select.mp3"></audio></td>
              <td>Pokémon Mystery Dungeon Red/Blue Rescue Team</td>
                <th>Spill, GBA/DS</th>
        </tr>
        <tr>
          <td>Great Canyon</td>
            <td><audio controls loop><source src="./musikk/PMD/PMD, PSMD - Great Canyon.mp3"></audio></td>
              <td>Pokémon Mystery Dungeon Red/Blue Rescue Team</td>
                <th>Spill, GBA/DS</th>
        </tr>
        <tr>
          <td>Run Away</td>
            <td><audio controls loop><source src="./musikk/PMD/PMD, PSMD - Run Away.mp3"></audio></td>
              <td>Pokémon Mystery Dungeon Red/Blue Rescue Team</td>
                <th>Spill, GBA/DS</th>
        </tr>
        <tr>
          <td>Beyond the Sky</td>
            <td><audio controls loop><source src="./musikk/PMD/PMDE - Beyond the Sky.mp3"></audio></td>
              <td>Pokémon Mystery Dungeon Explorers of Time/Sky/Darkness</td>
                <th>Spill, DS</th>
        </tr>
        <tr>
          <td>Don't Ever Forget</td>
            <td><audio controls loop><source src="./musikk/PMD/PMDE - Dont Ever Forget.mp3"></audio></td>
              <td>Pokémon Mystery Dungeon Explorers of Time/Sky/Darkness</td>
                <th>Spill, DS</th>
        </tr>
        <tr>
          <td>Lower Brine Cave</td>
            <td><audio controls loop><source src="./musikk/PMD/PMDE - Lower Brine Cave.mp3"></audio></td>
              <td>Pokémon Mystery Dungeon Explorers of Time/Sky/Darkness</td>
                <th>Spill, DS</th>
        </tr>
        <tr>
          <td>Memories Returned</td>
            <td><audio controls loop><source src="./musikk/PMD/PMDE - Memories Returned.mp3"></audio></td>
              <td>Pokémon Mystery Dungeon Explorers of Time/Sky/Darkness</td>
                <th>Spill, DS</th>
        </tr>
        <tr>
          <td>Through the Sea of Time</td>
            <td><audio controls loop><source src="./musikk/PMD/PMDE, PSMD - Through the Sea of Time.mp3"></audio></td>
              <td>Pokémon Mystery Dungeon Explorers of Time/Sky/Darkness</td>
                <th>Spill, DS</th>
        </tr>
        <tr>
          <td>Children of Serene Village</td>
            <td><audio controls loop><source src="./musikk/PMD/PSMD - Children of Serene Village.mp3"></audio></td>
              <td>Pokémon Super Mystery Dungeon</td>
                <th>Spill, 3DS</th>
        </tr>
        <tr>
          <td>Lively Town</td>
            <td><audio controls loop><source src="./musikk/PMD/PSMD - Lively Town.mp3"></audio></td>
              <td>Pokémon Super Mystery Dungeon</td>
                <th>Spill, 3DS</th>
        </tr>
        <tr>
          <td>No Frustration, No Giving Up</td>
            <td><audio controls loop><source src="./musikk/PMD/PSMD - No Frustration, No Giving Up.mp3"></audio></td>
              <td>Pokémon Super Mystery Dungeon</td>
                <th>Spill, 3DS</th>
        </tr>
        <tr>
          <td>Partner's Theme </td>
            <td><audio controls loop><source src="./musikk/PMD/PSMD - Partner's Theme .mp3"></audio></td>
              <td>Pokémon Super Mystery Dungeon</td>
                <th>Spill, 3DS</th>
        </tr>
        <tr>
          <td>Poliwrath River</td>
            <td><audio controls loop><source src="./musikk/PMD/PSMD - Poliwrath River.mp3"></audio></td>
              <td>Pokémon Super Mystery Dungeon</td>
                <th>Spill, 3DS</th>
        </tr>
        <tr>
          <td>Serene Village</td>
            <td><audio controls loop><source src="./musikk/PMD/PSMD - Serene Village.mp3"></audio></td>
              <td>Pokémon Super Mystery Dungeon</td>
                <th>Spill, 3DS</th>
        </tr>
        <tr>
          <td>Time to Part Ways</td>
            <td><audio controls loop><source src="./musikk/PMD/PSMD - Time to Part Ways.mp3"></audio></td>
              <td>Pokémon Super Mystery Dungeon</td>
                <th>Spill, 3DS</th>
        </tr>
        <div class="font">
          <tr>
            <td class="font">Bomb Rush Blush</td>
              <td><audio controls loop><source src="./musikk/splatoon/Bomb Rush Blush [Squid Sisters] - Splatoon.mp3"></audio></td>
                <td class="font">Splatoon</td>
                  <th>Spill, Wii u</th>
          </tr>
          <tr>
            <td class="font">Calamari Inkanatation</td>
              <td><audio controls loop><source src="./musikk/splatoon/Calamari Inkanatation [Squid Sisters] - Splatoon.mp3"></audio></td>
                <td class="font">Splatoon</td>
                  <th>Spill, Wii u</th>
          </tr>
          <tr>
            <td class="font">City of color</td>
              <td><audio controls loop><source src="./musikk/splatoon/City of color [Squid Sisters] - Splatoon.mp3"></audio></td>
                <td class="font">Splatoon</td>
                  <th>Spill, Wii u</th>
          </tr>
          <tr>
            <td class="font">Hooked</td>
              <td><audio controls loop><source src="./musikk/splatoon/Hooked - Splatoon.mp3"></audio></td>
                <td class="font">Splatoon</td>
                  <th>Spill, Wii u</th>
          </tr>
          <tr>
            <td class="font">Ink Me Up</td>
              <td><audio controls loop><source src="./musikk/splatoon/Ink Me Up [Squid Sisters] - Splatoon.mp3"></audio></td>
                <td class="font">Splatoon</td>
                  <th>Spill, Wii u</th>
          </tr>
          <tr>
            <td class="font">Maritime Memory</td>
              <td><audio controls loop><source src="./musikk/splatoon/Maritime Memory [Squid Sisters] - Splatoon.mp3"></audio></td>
                <td class="font">Splatoon</td>
                  <th>Spill, Wii u</th>
          </tr>
          <tr>
            <td class="font">Now or Never</td>
              <td><audio controls loop><source src="./musikk/splatoon/Now or Never [Squid Sisters] - Splatoon.mp3"></audio></td>
                <td class="font">Splatoon</td>
                  <th>Spill, Wii u</th>
          </tr>
          <tr>
            <td class="font">Seaskape</td>
              <td><audio controls loop><source src="./musikk/splatoon/Seaskape (Squid Squad) - Splatoon.mp3"></audio></td>
                <td class="font">Splatoon</td>
                  <th>Spill, Wii u</th>
          </tr>
          <tr>
            <td class="font">Splattack!</td>
              <td><audio controls loop><source src="./musikk/splatoon/Splattack! (Squid Squad) - Splatoon.mp3"></audio></td>
                <td class="font">Splatoon</td>
                  <th>Spill, Wii u</th>
          </tr>
          <tr>
            <td class="font">Tide Goes Out</td>
              <td><audio controls loop><source src="./musikk/splatoon/Tide Goes Out [Squid Sisters] - Splatoon.mp3"></audio></td>
                <td class="font">Splatoon</td>
                  <th>Spill, Wii u</th>
          </tr>
          <tr>
            <td class="font">Fresh Start</td>
              <td><audio controls loop><source src="./musikk/splatoon 2/Fresh Start Squid Sisters - Splatoon 2 - Music.mp3"></audio></td>
                <td class="font">Splatoon 2</td>
                  <th>Spill, Switch</th>
          </tr>
          <tr>
            <td class="font">Fly octo fly</td>
              <td><audio controls loop><source src="./musikk/splatoon 2/Fly octo fly Off the hook - Splatoon 2.mp3"></audio></td>
                <td class="font">Splatoon 2</td>
                  <th>Spill, Switch</th>
          </tr>
        </div>
      </table>

  </div>
  </body>

</html>
