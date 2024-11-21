<html>
  <head></head>
  <body><center>
    <p><h2>Her kan du opprette ny rad i tbl_plass</h2>
    <form method = "POST" action = "./del2 bordplassregistrering sendt.php" name= "plass" >
      <table>
        <!--<tr><td>PlassID</td><td><input type = "text" name="id"size="40"value=""></td></tr>-->
        <tr><td>Bordnr/id</td><td><input type = "text" name="bordnr"size="40"value=""></td></tr>
        <tr><td>AntallPlasser</td><td><input type = "text" name="antallplasser"size="40"value=""></td></tr>
        <tr><td>Handikapvennlig</td><td><select name="handikap">
          <option value="Ja">Ja</option><option value="Nei">Nei</option>
        </select></td></tr>
        <tr><td>Kommentar</td><td><input type = "text" name="kommentar"size="40"value=""></td></tr>
      </table>
      <p><input type ="submit" value= "Opprett plass" name="send_plass">
      <inputtype ="reset"value = "Fjern info i skjema" name="fjern_skjemainfo"></p>
    </form>
  </center>
  </body>
</html>


<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<!--snarvei til andre sider-->
<?php
include ("./index.php");
?>
