<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$hoyde = $_POST['hoyde'];
$lengde = $_POST['lengde'];
$bredde = $_POST['bredde'];
$tykkelse = $_POST['tykkelse'];
}
?>

  <html>
    <head>
      <title>21 CDE</title>
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
      <h1>21CDE kube</h1>
      <form name="personal" action="" method="POST">

      Lengde <input type="text" size="20" name="lengde"> meter<p>
      Bredde <input type="text" size="20" name="bredde"> meter<p>
      H&oslash;yde <input type="text" size="20" name="hoyde"> meter<p>
      veggens tykkelse i kuben <input type="text" size="20" name="tykkelse"> meter<p>
      <?php $sann=1;?>
      <input type="submit" name="submit" value ="send">
      <br>
<?php
$kubeareal = ((($lengde*$bredde)+($bredde*$hoyde)+($hoyde*$lengde))*2);
$kubevolum = ($lengde*$bredde*$hoyde);
$veggvolum = (($lengde*$hoyde*$tykkelse*2)  +  ( ($bredde-($tykkelse*2)) * $hoyde * $tykkelse*2)  +  (($lengde-($tykkelse*2)) * ($bredde-($tykkelse*2)) * $tykkelse*2) );
if ($sann = 1) {
  // code...
print 'lengden er ' .$lengde. ' meter <br>
       bredden er ' .$bredde. ' meter <br>
       h&oslash;yden er ' .$hoyde. ' meter <br>
       tykkelsen p&aring; veggen er ' .$tykkelse. ' meter
       <br><br>
       Arealet av kuben er ' .$kubeareal. ' kvadratmeter <br>
       Volumet av kuben er ' .$kubevolum. ' kubikkmeter <br><br>

       volumet i veggen er ' .$veggvolum. ' kubikkmeter';

     }
     elseif ($tykkelse >($lengde/2) or $tykkelse >($hoyde/2) or $tykkelse >($bredde/2)) {
       print'FEIL! <br>
       veggene i kuben kan ikke ha mer volum enn kuben';
     }
?>
    </body>
  </html>
