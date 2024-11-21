<!---
#################################################################
# Campingplass-eksempel. Database med 2 tabeller.                 #
# © Peter M.M. Rasmussen.                                       #
# Filnavn: opprett_plass_skjema.html                            #
#################################################################
--->
<html>
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
    <h1>32B registrer reservasjon</h1>
    <p><h2>registrer reservasjon</h2>
    <form method = "POST" action = "./32B_reservasjon_opprettet.php" name= "plass" >
      <center><table>
        <tr><td>Kundenummer</td><td><input type = "text" name="kundenr"size="40"value=""></td></tr>
        <tr><td>Bordnr</td><td><input type = "text" name="bordnr"size="40"value=""></td></tr>
        <tr><td>Dato</td><td><input type = "text" name="dato"size="40"value=""></td></tr>
        <tr><td>Klokkeslett fra</td><td><input type = "text" name="klokkeslett_fra"size="40"value=""></td></tr>
        <tr><td>Klokkeslett til</td><td><input type = "text" name="klokkeslett_til"size="40"value=""></td></tr>
        <tr><td>Kommentar</td><td><input type = "text" name="kommentar"size="40"value=""></td></tr>
        <!---
        <tr><td>Opprettet</td><td><input type = "text" name="opprettet"size="40"value=""></td></tr>
        <tr><td>Sluttet</td><td><input type = "text" name="sluttet"size="40"value=""></td></tr>
        --->
      </table></center>
      <p><input type ="submit" value= "Opprett plass" name="send_plass">
      <inputtype ="reset"value = "Fjern info i skjema" name="fjern_skjemainfo"></p>
    </form>
  </body>
</html>
