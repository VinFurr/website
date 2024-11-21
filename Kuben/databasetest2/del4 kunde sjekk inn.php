
<html>
  <head>
  </head>
  <body><center>
    <p><h2>Innsjekking av kunde.</h2>
    <!---
    <form method = "POST" action = "./../uvUke31_db_2_tbl_run_underkatalog/kunde_sjekk_inn_registrere.php" name= "kunde" >
    --->
    <form method = "POST" action = "./del4 kunde sjekk inn registrert.php" name= "kunde" >
      <table>
        <tr>
          <td>Fornavn</td>
          <td><input type = "text" name="fornavn"size="40"value=""></td>
        </tr><tr>
          <td>Etternavn</td>
          <td><input type = "text" name="etternavn"size="40"value=""></td>
        </tr><tr>
          <td>telefon</td>
          <td><input type = "text" name="telefon"size="40"value=""></td>
        </tr><tr>
          <td>e-post</td>
          <td><input type = "text" name="epost"size="40"value=""></td>
        </tr><tr>
          <td>Personer</td>
          <td>
            <select name="antallpersoner">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
          </td>
        </tr><tr>
          <td>Ankomst</td>
          <td>
            <select name="ankomst">

              <?php
              for ($a=1; $a<=31; $a++) {
                print '<option value = "'.$a.'">'.$a.'</option>';
              }
              print '</select><select name="Month">';
              for ($b=1; $b<=12; $b++) {
                print '<option value = "'.$b.'">'.$b.'</option>';
              }
              print '</select><select name="Year">';
              for ($c=2016; $c<=2026; $c++) {
                print '<option value = "'.$c.'">'.$c.'</option>';
              }
              ?>
              </select>

          </td>
        </tr>
        <input type="hidden" name="sjekkinn" value="Ja">

        <tr>
          <td>Kommentar</td>
          <td>
            <textarea rows="4" cols="60" name="kommentar" value=""></textarea>
          </td>
        </tr>
      <?php
      include './del4 velg ledige plasser.php';
      ?>
    </table>
      <p><input type ="submit" value= "Opprett_innsjekking" name="Innsjekking">
        <inputtype ="reset"value = "Fjern info i skjema" name="fjern_skjemainfo"></p>
    </form>
  </center></body>
</html>
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<?php
include ("./index.php");
?>
