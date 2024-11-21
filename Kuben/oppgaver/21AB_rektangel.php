<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$lengde = $_POST['lengde'];
$bredde = $_POST['bredde'];

$diagonal = sqrt(($lengde*$lengde)+($bredde*$bredde));
}
?>

  <html>
    <head>
      <title>21 AB </title>
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
      <h1>21AB</h1>
      <form name="personal" action="" method="POST">

      Lengde <input type="text" size="20" name="lengde"> meter<p>
      Bredde <input type="text" size="20" name="bredde"> meter<p>
      <?php $sann=1;?>
      <input type="submit" name="submit" value ="send">
      <br>

<?php
if ($sann = 1) {
  // code...
print '      <center><table>
        <tr>
          <td>Lengden er ' .$lengde. ' meter</td>
          <td></td>
          <td><img src="21AB_rektangel.png" height=100px widh=100px></td>
        </tr><tr>
          <td></td>
          <td></td>
          <td></td>
        </tr><tr>
          <td>Diagonalen er ' .$diagonal. ' meter</td>
          <td></td>
          <td>Bredden er ' .$bredde. ' meter</td>
        </tr>
        </tr>
      </table>
      </center>';
     }
?>
    </body>
  </html>
