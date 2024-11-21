<html> 
<!---

#################################################################
# elevfag-eksempel. Database med 3 tabeller.                    #
# mange-til-mange relasjon.                                     #
# Peter M.M. Rasmussen.                                         #
# Filnavn: elev_opprett_skjema.php                                 #
#################################################################

--->
<head></head>
<body>
<p><h2>Her kan du opprette ny rad i tbl_elev</h2>
<form method = "POST" action = "./elev_opprett_registrere.php" name= "elev" >
<table>
<tr><td>Personnr</td><td><input type = "text" name="personnr"size="40"value=""></td></tr>
<tr><td>Fornavn</td><td><input type = "text" name="fornavn"size="40"value=""></td></tr>
<tr><td>Etternavn</td><td><input type = "text" name="etternavn"size="40"value=""></td></tr>
<tr><td>Gatenavn</td><td><input type = "text" name="gatenavn"size="40"value=""></td></tr>
<tr><td>Poststed</td><td><input type = "text" name="poststed"size="40"value=""></td></tr>
<tr><td>Postnr</td><td><input type = "text" name="postnr"size="40"value=""></td></tr>
<tr><td>Land</td><td><input type = "text" name="land"size="40"value=""></td></tr>
<tr><td>Nasjonalitet</td><td><input type = "text" name="nasjonalitet"size="40"value=""></td></tr>
<!---
<tr><td>Opprettet</td><td><input type = "text" name="opprettet"size="40"value=""></td></tr>
<tr><td>Sluttet</td><td><input type = "text" name="sluttet"size="40"value=""></td></tr>
--->
<tr><td>Kommentar</td><td><input type = "text" name="kommentar"size="40"value=""></td></tr>
</table>
<p><input type ="submit" value= "Opprett elev" name="send_elevregistrering">
<inputtype ="reset"value = "Fjern info i skjema" name="fjern_skjemainfo"></p>
</form>
</body>
</html>
