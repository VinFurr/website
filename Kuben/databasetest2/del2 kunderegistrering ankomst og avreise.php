<html>
  <head></head>
  <body><center>
    <p><h2>Her kan du opprette ny rad i tbl_kunde</h2>
    <form method = "POST" action = "./del2 kunderegistrering ankomst og avreise sendt.php" name= "kunde" >
      <table>
        <tr><td>Fornavn</td><td><input    type = "text" name="navn"size="40"value=""></td></tr>
        <tr><td>Etternavn</td><td><input  type = "text" name="etternavn"size="40"value=""></td></tr>
        <tr><td>Telefon</td><td><input    type = "text" name="telefon"size="40"value=""></td></tr>
        <tr><td>epost</td><td><input      type = "text" name="epost"size="40"value=""></td></tr>
        <tr><td>Personer</td><td><select name="personer">
          <option value="1">1</option><option value="2">2</option><option value="3">3</option>
          <option value="4">4</option><option value="5">5</option><option value="6">6</option>
        <tr><td>Kommentar</td><td><input  type = "text" name="kommentar"size="40"value=""></td></tr>
        <tr><td>Ankomst</td><td><input    type = "text" name="ankomst"size="40"value=""></td></tr>
        <tr><td>Avreise</td><td><input    type = "text" name="avreise"size="40"value=""></td></tr>
        </select></td></tr>
      </table><p>
      <input type ="submit" value= "Opprett kunde" name="send_kunderegistrering">
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
