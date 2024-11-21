<?php

$oppgaver = '';
$oppgaveark = '';
$prover = '';
$diverse = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $oppgaver = $_POST['oppg'];
  $oppgaveark = $_POST['oppga'];
  $prover = $_POST['pro'];
  $diverse = $_POST['div'];
}
?>

<!--IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII-->
<html>
  <head>
    <title>Arbeid...</title>
      <link rel="icon" href="./ikon/outlooktasks.png">
      <link rel="stylesheet" href="./css/index.css">
    <style>
      body {
        background-color: rgb(0, 128, 255, 0.5);

        left: 0%;
        right:0%;
        text-align: center;
        background-image: url("./bilder/summer-wallpaper.jpg");
      }
      .ikke_ferdig {
        color: red;
      }
    </style>
  </head>
  <body>
    <?php
    include ("./navbar.php")
    ?>
  <!-- <ul>
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
    </ul>
  -->
    <h1></h1>
    <form name="personal" action="" method="POST">
      <input type="submit" size="10" style="height:33px;width:200px" value="Oppgaver" name="oppg">
      <input type="submit" size="10" style="height:33px;width:200px" value="Oppgaveark" name="oppga">
      <input type="submit" size="10" style="height:33px;width:200px" value="Pr&oslash;ver" name="pro">
      <input type="submit" size="10" style="height:33px;width:200px" value="Diverse" name="div">
    </form>
<!--IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII-->
<?php
if ($oppgaver == 'Oppgaver') {
  print '
  <h2><center>Oppgaver</center></h2>
  <center>
  <table width="75%">
    <tbody>
  <!--    <tr>
        <td width="25%" colspan="3"><center><a href="./oppgaver/oppgaver/index.html"     target=""><button style="height:35px;width:300px;color:blue;">Tildelte oppgaver</button></a></center></td>
      </tr>-->
    </tbody><tbody>
      <tr>
        <td width="25%"><center><a href="./oppgaver/01E_pseudokode.html"     target=""><button style="height:35px;width:300px">01E Pseudokode</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/02AB_nyhetskoisken.html" target=""><button style="height:35px;width:300px">02AB Nyhetskiosken</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/03A_lydfiler.html"       target=""><button style="height:35px;width:300px">03A Lydfiler</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/03B_pizzabestilling.html" target=""><button style="height:35px;width:300px">03B Pizzabestilling</button></a></center></td>
 <!--4A-->  <td width="25%"><center><a href="./oppgaver/04A_valgfri_emne.html"    target=""><button style="height:35px;width:300px">04A Valgfri emne</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/04B_kart_og_byer.html"    target=""><button style="height:35px;width:300px">04B Kart og byer</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/05A_valgfri_emne_med_iframe.html"        target=""><button style="height:35px;width:300px">05A Valgfri emne med iframe</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/06A_forbedring_av_prove_19_09_2018.html" target=""><button style="height:35px;width:300px">06A Forbedring av pr&oslash;ve 19 Sep 2018</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/07_internet.html"                        target=""><button style="height:35px;width:300px">07 Internet</button></a></center></td>
      </tr><tr>
 <!--8-->    <td width="25%"><center><a href="./oppgaver/08_digital_samtid.html"                  target=""><button style="height:35px;width:300px">08 Digital samtid</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/10A_forbedring_av_prove_31_10_2018.html" target=""><button style="height:35px;width:300px" class="ikke_ferdig">10A Forbedring av pr&oslash;ve 31 Okt 2018*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/10B_dansende_hjerter.html"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">10B Dansende hjerter*</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/11A_strektegning_fargelegging.html" target=""><button style="height:35px;width:300px" class="ikke_ferdig">11A Strektegning, fargelegging*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/11B_bamseansikt.html"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">11B Bamseansikt*</button></a></center></td>
 <!--11C-->  <td width="25%"><center><a href="./oppgaver/11C_roterende_propell.html"         target=""><button style="height:35px;width:300px" class="ikke_ferdig">11C Roterende propell*</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/11D_sammensatt_bilde.html" target=""><button style="height:35px;width:300px" class="ikke_ferdig">11D Sammensatt bilde*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/11E_utklippsoving.html"    target=""><button style="height:35px;width:300px">11E Utklipps&oslash;ving</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/12AB_hytte.html"           target=""><button style="height:35px;width:300px">12AB Hytte</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/13AB_flyselskap.html"             target=""><button style="height:35px;width:300px" class="ikke_ferdig">13AB Flyselskap*</button></a></center></td>
 <!--14-->   <td width="25%"><center><a href="./oppgaver/14_flyselskap.html"            target=""><button style="height:35px;width:300px">14 Presentasjon til nettside</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/15_datamaskinens_oppbygging.html" target=""><button style="height:35px;width:300px" class="ikke_ferdig">15 Datamaskinens oppbygging*</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/16A_videoredigering.html" target=""><button style="height:35px;width:300px">16A Videoredigering</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/.html"                    target=""><button style="height:35px;width:300px" class="ikke_ferdig">16B Forbedring av pr&oslash;ve 05 Des 2018*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/17A_julefilm.html"        target=""><button style="height:35px;width:300px">17A julefilm</button></a></center></td>
      </tr><tr>
 <!--17B-->  <td width="25%"><center><a href="./oppgaver/17B_juleside.html"                target=""><button style="height:35px;width:300px" class="ikke_ferdig">17B Juleside*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/18A_oppsummering.html"            target=""><button style="height:35px;width:300px">18A Oppsummering</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/18B_+-_digitalisert_hverdag.html" target=""><button style="height:35px;width:300px" class="ikke_ferdig">18B +/- ved digitalisert hverdag*</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/19A_nettside_i_php.php" target=""><button style="height:35px;width:300px">19A</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/19B_nettside_i_php.php" target=""><button style="height:35px;width:300px">19B</button></a></center></td>
 <!--19C-->  <td width="25%"><center><a href="./oppgaver/19C_kalkulator.php"     target=""><button style="height:35px;width:300px">19C</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/19D_ferie.php"                target=""><button style="height:35px;width:300px">19D</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/20ABC_omregning.php"          target=""><button style="height:35px;width:300px">20ABC omregning</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/20DE_hoyde_og_temperatur.php" target=""><button style="height:35px;width:300px">20DE h&oslash;yde og temperatur</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/20F_frokost.php"             target=""><button style="height:35px;width:300px">20F Frokostbestilling</button></a></center></td>
 <!--21AB--> <td width="25%"><center><a href="./oppgaver/21AB_rektangel.php"          target=""><button style="height:35px;width:300px">21AB Rektangel</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/21CDE_kube.php"              target=""><button style="height:35px;width:300px">21CDE Kube</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/22A_multiplisering.php"          target=""><button style="height:35px;width:300px">22A Multiplisering</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/22B_kalkulering.php"             target=""><button style="height:35px;width:300px">22B Kalkulering</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/23A"                             target=""><button style="height:35px;width:300px" class="ikke_ferdig">23A forbedring av prove 30 jan 2019*</button></a></center></td>
      </tr><tr>
 <!--23B-->  <td width="25%"><center><a href="./oppgaver/23B"                     target=""><button style="height:35px;width:300px">23B lage blogg**</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/23C_lese_blogg.php"      target=""><button style="height:35px;width:300px">23C lese blogg</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/24A_liste.php"           target=""><button style="height:35px;width:300px">24A liste</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/24B_bildeliste.php"               target=""><button style="height:35px;width:300px">24B bildeliste</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/24C"                              target=""><button style="height:35px;width:300px" class="ikke_ferdig">24C*</button></a></center></td>
 <!--25A-->  <td width="25%"><center><a href="./oppgaver/25A_behandling_av_input.php"      target=""><button style="height:35px;width:300px">25A behandling av input</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/25B"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">25B*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/25C"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">25C*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/26A_sektordiagram.html"               target=""><button style="height:35px;width:300px">26A sektordiagram</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/26B_last_opp_bilde.html"         target=""><button style="height:35px;width:300px">26B bildeopplastning</button></a></center></td>
 <!--26C-->  <td width="25%"><center><a href="./oppgaver/26C_last_opp_dokument.html" target=""><button style="height:35px;width:300px">26C dokumentopplastning</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/27A.csv"                         target=""><button style="height:35px;width:300px">27A</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/27B.php"               target=""><button style="height:35px;width:300px">27B</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/27C"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">27C*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/27D"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">27D*</button></a></center></td>
      </tr><tr>
 <!--27E-->  <td width="25%"><center><a href="./oppgaver/27E"                         target=""><button style="height:35px;width:300px" class="ikke_ferdig">27E*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/27F"                              target=""><button style="height:35px;width:300px" class="ikke_ferdig">27F*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/28B_database-skriv_melding.html"  target=""><button style="height:35px;width:300px">28 Database skriv melding</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/30A_forbedring_av_prove_27_3_2019.html.html"  target=""><button style="height:35px;width:300px">30A forbedring av pr&oslash;ve 27 Mar 2019</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/31B_digital_samtid.php"                       target=""><button style="height:35px;width:300px">31B digital samid</button></a></center></td>
 <!--21AB--> <td width="25%"><center><a href="./oppgaver/32B_registrer_kunder.php"                target=""><button style="height:35px;width:300px">32B kunderegistrering</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/32B_registrer_bordplass.php"     target=""><button style="height:35px;width:300px">32B Registrer bordplass</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/32B_reservasjon_registrer.php"       target=""><button style="height:35px;width:300px">32B reservasjon registrer</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/34B_klipp_og_lim_lydfil.php"               target=""><button style="height:35px;width:300px">34B klipp og lim lydfiler</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/35_stem_pa_bilder.php"               target=""><button style="height:35px;width:300px">35 stem p&aring; bilde</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/"               target=""><button style="height:35px;width:300px" class="ikke_ferdig">*</button></a></center></td>
      </tr><tr>

        <td width="25%"><center><a href="./oppgaver/soylediagram.html"        target=""><button style="height:35px;width:300px">S&oslash;ylediagram</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/egen skrifttype.html"     target=""><button style="height:35px;width:300px">egen skriftype</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/tabell.html"              target=""><button style="height:35px;width:300px">tabell</button></a></center></td>
      </tr>
    </tbody>
  </table>
 </center>';
}
elseif ($oppgaveark =='Oppgaveark') {
  print '<h2><center>Oppgaveark</center></h2>
  <center>
  <table width="75%">
    <tbody>
      <tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_01.pdf" target=""><button style="height:35px;width:300px">Oppgave 1</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_02.pdf" target=""><button style="height:35px;width:300px">Oppgave 2</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_03.pdf" target=""><button style="height:35px;width:300px">Oppgave 3</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_04.pdf" target=""><button style="height:35px;width:300px">Oppgave 4</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_05.pdf" target=""><button style="height:35px;width:300px">Oppgave 5</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_06.pdf" target=""><button style="height:35px;width:300px">Oppgave 6</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_07.pdf" target=""><button style="height:35px;width:300px">Oppgave 7</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_08.pdf" target=""><button style="height:35px;width:300px">Oppgave 8</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_09.pdf" target=""><button style="height:35px;width:300px">Oppgave 9</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_10.pdf" target=""><button style="height:35px;width:300px">Oppgave 10</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_11A.pdf" target=""><button style="height:35px;width:300px">Oppgave 11A</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_11B.pdf" target=""><button style="height:35px;width:300px">Oppgave 11B</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_11C.pdf" target=""><button style="height:35px;width:300px">Oppgave 11C</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_11D.pdf" target=""><button style="height:35px;width:300px">Oppgave 11D</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_11E.pdf" target=""><button style="height:35px;width:300px">Oppgave 11E</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_12.pdf" target=""><button style="height:35px;width:300px">Oppgave 12</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_13.pdf" target=""><button style="height:35px;width:300px">Oppgave 13</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_14.pdf" target=""><button style="height:35px;width:300px">Oppgave 14</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_15.pdf" target=""><button style="height:35px;width:300px">Oppgave 15</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_16.pdf" target=""><button style="height:35px;width:300px">Oppgave 16</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_17.pdf" target=""><button style="height:35px;width:300px">Oppgave 17</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_18.pdf" target=""><button style="height:35px;width:300px">Oppgave 18</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_19.pdf" target=""><button style="height:35px;width:300px">Oppgave 19</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_20.pdf" target=""><button style="height:35px;width:300px">Oppgave 20</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_21.pdf" target=""><button style="height:35px;width:300px">Oppgave 21</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_22.pdf" target=""><button style="height:35px;width:300px">Oppgave 22</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_23.pdf" target=""><button style="height:35px;width:300px">Oppgave 23</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_24.pdf" target=""><button style="height:35px;width:300px">Oppgave 24</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_25.pdf" target=""><button style="height:35px;width:300px">Oppgave 25</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_26.pdf" target=""><button style="height:35px;width:300px">Oppgave 26</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_27.pdf" target=""><button style="height:35px;width:300px">Oppgave 27</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_28.pdf" target=""><button style="height:35px;width:300px">Oppgave 28</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_29.pdf" target=""><button style="height:35px;width:300px">Oppgave 29</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_30.pdf" target=""><button style="height:35px;width:300px">Oppgave 30</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_31.pdf" target=""><button style="height:35px;width:300px">Oppgave 31</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_32.pdf" target=""><button style="height:35px;width:300px">Oppgave 32</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_33.pdf" target=""><button style="height:35px;width:300px">Oppgave 33</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_34.pdf" target=""><button style="height:35px;width:300px">Oppgave 34</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_35.pdf" target=""><button style="height:35px;width:300px">Oppgave 35</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_36.pdf" target=""><button style="height:35px;width:300px">Oppgave 36*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_37.pdf" target=""><button style="height:35px;width:300px">Oppgave 37*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_38.pdf" target=""><button style="height:35px;width:300px">Oppgave 38*</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_39.pdf" target=""><button style="height:35px;width:300px">Oppgave 39*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_40.pdf" target=""><button style="height:35px;width:300px">Oppgave 40*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_41.pdf" target=""><button style="height:35px;width:300px">Oppgave 41*</button></a></center></td>
      </tr><tr>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_42.pdf" target=""><button style="height:35px;width:300px">Oppgave 42*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_43.pdf" target=""><button style="height:35px;width:300px">Oppgave 43*</button></a></center></td>
        <td width="25%"><center><a href="./oppgaver/oppgaveark/oppgave_44.pdf" target=""><button style="height:35px;width:300px">Oppgave 44*</button></a></center></td>
      </tr>
    </tbody>
  </table>
 </center>';
}
elseif ($prover != '') /*kan ikke bruke ø/&oslash;*/{
  print '<center>
    <h2>Pr&oslash;ver</h2>
      <table width="50%">
        <tbody>
          <tr>
            <th>Original innlevering</th>
            <th>Redigert utgave</th>
          </tr>
          <tr>
            <td width="10%"><center><a href="./prover/2018 9september 19/index.html"            target=""><button style="height:35px;width:300px">19 September 2018</button></a></center></td>
            <td width="10%"><center><a href="./prover/2018 9september 19 redigert/index.html"   target=""><button style="height:35px;width:300px">19 September 2018</button></a></center></td>
          </tr><tr>
            <td width="10%"><center><a href="./prover/2018 10oktober 31/index.html"             target=""><button style="height:35px;width:300px">31 Oktober 2018</button></a></center></td>
            <td width="10%"><center><a href=""                                                  target=""><button style="height:35px;width:300px" class="ikke_ferdig">31 Oktober 2018*</button></a></center></td>
          </tr><tr>
            <td width="10%"><center><a href="./prover/2018 12desember 5/index.html"             target=""><button style="height:35px;width:300px">5 Desember 2018</button></a></center></td>
            <td width="10%"><center><a href=""                                                  target=""><button style="height:35px;width:300px" class="ikke_ferdig">5 Desember 2018*</button></a></center></td>
          </tr><tr>
            <td width="10%"><center><a href="./prover/2019 1januar 30/index.html"               target=""><button style="height:35px;width:300px">30 Januar 2019</button></a></center></td>
            <td width="10%"><center><a href=""                                                  target=""><button style="height:35px;width:300px" class="ikke_ferdig">30 Januar 2019*</button></a></center></td>
          </tr><tr>
            <td width="10%"><center><a href="./prover/2019 3mars 27/index.html"                 target=""><button style="height:35px;width:300px">27 mars 2019</button></a></center></td>
            <td width="10%"><center><a href="./prover/2019 3mars 27 redigert/index.html"        target=""><button style="height:35px;width:300px">27 mars 2019</button></a></center></td>
          </tr>
        </tbody>
      </table>
  </center>';
}
elseif ($diverse == 'Diverse') {
  print '<center>
    <h2>Diverse</h2>
      <table width="50%">
        <tbody>
          <tr>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <td width="10%"><center><a href="./diverse/miiverse/index.html"   target="blank"><button style="height:35px;width:300px">Miiverse</button></a></center></td>
            <td width="10%"><center><a href="./diverse/KKK/Forside.html"      target="blank"><button style="height:35px;width:300px">Kuben KodeKlubb</button></a></center></td>
          </tr><tr>
            <td width="10%"><center><a href="https://www.facebook.com/groups/SplatoonNorway"  target="blank"><button style="height:35px;width:300px">Splatoon</button></a></center></td>
            <td width="10%"><center><a href="http://twitter.com/Im_the_Fox"                   target="blank"><button style="height:35px;width:300px">Twitter</button></a></center></td>
          </tr><tr>
            <td width="10%"><center><a href="https://www.youtube.com/channel/UCa6ct6yRcVkmoZ5k14GFTmg?view_as=subscriber"  target="blank"><button style="height:35px;width:300px">youtube</button></a></center></td>
            <td width="10%"><center><a href="https://www.wikihow.com/Be-a-Furry"                                           target="blank"><button style="height:35px;width:300px">Furry</button></a></center></td>
          </tr><tr>
            <td width="10%"><center><a href="https://www.facebook.com/MobbeNytt/"   target="blank"><button style="height:35px;width:300px">MobbeNytt</button></a></center></td>
            <td width="10%"><center><a href="./diverse/kuben koder 2.0/index.html"          target="blank"><button style="height:35px;width:300px">Kuben Kodeklubb 2.0</button></a></center></td>
          </tr><tr>
            <td width="10%"><center><a href="./diverse/dikt.html"   target="blank"><button style="height:35px;width:300px">dikt</button></a></center></td>
            <td width="10%"><center><a href="#"   target="blank"><button style="height:35px;width:300px">(tom knapp)</button></a></center></td>
          </tr> <tr>
            <td width="10%"><center><a href="#"   target="blank"><button style="height:35px;width:300px">(tom knapp)</button></a></center></td>
            <td width="10%"><center><a href="#"   target="blank"><button style="height:35px;width:300px">(tom knapp)</button></a></center></td>
          </tr>



        </tbody>
      </table>
  </center>';
}
else {
  print '<h2>Velg en knapp ovenfor</h2>';
}
?>
<!--IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII-->
    <center><audio loop autoplay controls><source src="./musikk/nintendo/Nintendo eShop January 2019.mp3"></audio></center>
  </body>
</html>
