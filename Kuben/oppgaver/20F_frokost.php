<?php

$drikke ='';
$brod ='';
//$palegg = $_POST['palegg'];

$palegg1 ='';
$palegg2 ='';
$palegg3 ='';
$palegg4 ='';
$palegg5 ='';
$palegg6 ='';
$palegg7 ='';
$palegg8 ='';
$palegg9 ='';
$palegg10 ='';
$totalpalegg ='';
$drikkepris ='';

?>
  <html>
    <head>
      <meta charset="windows-1252">
      <title>20F</title>
      <link rel="icon" type="image/gif" href="" ></link>
      <style>
        body {
          background-color: rgb(0, 128, 255);
          background-image:url("./20F_frokost.jpg");
          background-size: cover;
          position: absolute;
          left: 5%;
          right:5%;
          text-align: center;
          margin: auto;
          width: 600px;
        }

        .centeri {
          position: absolute;
          top:100;
          width: 600px;
          height: 700px;
          background-color: white;
          margin-left: auto;
          margin-right: auto;
          left: 0;
          right: 0;
          z-index: -1;
          opacity: 0.6;
          top:0;
        }
      </style>
    </head>
    <body>
      <div class="centeri"></div>

      <h1>20F Frokostbestilling</h1>
      <br>
      <form name="personal" action="" method="POST">
        <center><table>
          <tr>
            <td>Drikke</td>
            <td><select name="drikke" size = "1">
              <option value="appelsinjuice" selected>Appelsinjuice</option>
              <option value="eplejuice"             >Eplejuice</option>
              <option value="te"                    >Te</option>
              <option value="kaffe"                 >Kaffe</option>
              <option value="kakao"                 >Kakao</option>
              <option value="melk"                  >Melk</option>
              <option value="vann"                  >Vann</option>
            </select> 5kr stk</td>
            </tr><tr>
              <td>Antall br&oslash;dskiver:</td>
              <td><input type="text" size="1" name="brod" placeholder="0"> 5kr stk (p&aring;legg inkludert)</td>
            </tr><tr>
              <td>Antall p&aring;legg med ost</td>
              <td><input type="text" size="1" name="palegg1" placeholder="0"></td>
            </tr><tr>
              <td>Antall p&aring;legg med leverpostei</td>
              <td><input type="text" size="1" name="palegg2" placeholder="0"></td>
            </tr><tr>
              <td>Antall p&aring;legg med syltet&oslash;y</td>
              <td><input type="text" size="1" name="palegg3" placeholder="0"></td>
            </tr><tr>
              <td>Antall p&aring;legg med p&oslash;lse</td>
              <td><input type="text" size="1" name="palegg4" placeholder="0"></td>
            </tr><tr>
              <td>Antall p&aring;legg med skinke</td>
              <td><input type="text" size="1" name="palegg5" placeholder="0"></td>
            </tr><tr>
              <td>Antall p&aring;legg med egg</td>
              <td><input type="text" size="1" name="palegg6" placeholder="0"></td>
            </tr><tr>
              <td>Antall p&aring;legg med banan</td>
              <td><input type="text" size="1" name="palegg7" placeholder="0"></td>
            </tr><tr>
              <td>Antall p&aring;legg med servelat</td>
              <td><input type="text" size="1" name="palegg8" placeholder="0"></td>
            </tr><tr>
              <td>Antall p&aring;legg med skinkeost</td>
              <td><input type="text" size="1" name="palegg9" placeholder="0"></td>
            </tr><tr>
              <td>Antall p&aring;legg med honning</td>
              <td><input type="text" size="1" name="palegg10" placeholder="0"></td>
            </tr><tr>
          </table></center>
  <!--        p&aring;legg: <select name="palegg" size = "1">
                        <option value="ost"         selected>Ost</option>
                        <option value="leverpostei"         >Leverpostei</option>
                        <option value="syltetøy"            >Syltetøy</option>
                        <option value="pølse"               >Pølse</option>
                        <option value="skinke"              >Skinke</option>
                        <option value="egg"                 >Egg</option>
                        <option value="banan"               >Banan</option>
                        <option value="servelat"            >Servelat</option>
                        <option value="skikeost"            >Skinkeost</option>
                        <option value="honning"             >Honning</option>
                      </select><p><p>
-->
        <input type="submit" name="submit" style="height:35px;width:200px" value ="Send bestilling!">
</form><br><br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $drikke = $_POST['drikke'];
  $brod = $_POST['brod'];
  //$palegg = $_POST['palegg'];

  $palegg1 = $_POST['palegg1'];
  $palegg2 = $_POST['palegg2'];
  $palegg3 = $_POST['palegg3'];
  $palegg4 = $_POST['palegg4'];
  $palegg5 = $_POST['palegg5'];
  $palegg6 = $_POST['palegg6'];
  $palegg7 = $_POST['palegg7'];
  $palegg8 = $_POST['palegg8'];
  $palegg9 = $_POST['palegg9'];
  $palegg10 = $_POST['palegg10'];
  $totalpalegg = ($palegg1+$palegg2+$palegg3+$palegg4+$palegg5+$palegg6+$palegg7+$palegg8+$palegg9+$palegg10);
  $brodpris = $brod * 5;
}


if ($drikke == "appelsinjuice" || $drikke =="eplejuice" || $drikke == "te" || $drikke == "kaffe" || $drikke == "kakao" || $drikke == "melk") {
  $drikkepris = 5;
}
else if ($drikke == "vann") {
  $drikkepris = 0;
}


if ($totalpalegg > $brod) {
  print 'FEIL! <br> Du kan ikke bestille mer p&aring;legg enn antall br&oslash;dskiver. Pr&oslash;v igjen!';
}
else {
}


if ($totalpalegg == 0 AND $brod == 0)  {
  // code...
}
elseif ($totalpalegg < $brod or $totalpalegg == $brod) {
  print 'Du har bestilt ' . $drikke . '<br><br>';
  print 'Du har bestilt ' . $brod . ' br&oslash;dskiver<br><br>';
  //print 'Du har bestilt ' . $palegg . '<br><br>';
  print 'total p&aringlegg = ' .$totalpalegg. '<br><br>';
  print 'den totale prisen er ' .($brodpris + $drikkepris). ' kr<br><br>';
}
/*elseif ($totalpalegg == $brod) {
  print 'Du har bestilt ' . $drikke . '<br><br>';
  print 'Du har bestilt ' . $brod . ' br&oslash;dskiver<br><br>';
  //print 'Du har bestilt ' . $palegg . '<br><br>';
  print 'total p&aringlegg = ' .$totalpalegg. '<br><br>';
  print 'den totale prisen er ' .($brodpris + $drikkepris). ' kr<br><br>';
}*/

print'
      <br><br><br><br>
    </body>
  </html>';
print date("d.m.Y");
print '<br><br><br>';
 ?>
