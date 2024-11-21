<?php

// Lager bilde, tall angir størrelse i pixler
$eksempel = imagecreate(100, 100);

$background = imagecolorallocate($eksempel, 255, 100, 0);

//Farger i RGB
$yellow     = imagecolorallocate($eksempel, 255, 255,0);
$green     = imagecolorallocate($eksempel, 0, 255, 0);
$red      = imagecolorallocate($eksempel, 255, 0, 0);


imagefilledarc($eksempel, 50, 50, 100, 50, 0, 45, $green, IMG_ARC_PIE);
imagefilledarc($eksempel, 50, 50, 100, 50, 45, 75 , $yellow, IMG_ARC_PIE);
imagefilledarc($eksempel, 50, 50, 100, 50, 75, 360 , $red, IMG_ARC_PIE);
//imagefilledarc ( ressurs , radius , radius , diameter , radius , start gradtall , slutt gradtall , farge  , stil )

//Flush bildet (send det til skjerm).
header('Content-type: image/png');
imagepng($eksempel);
imagedestroy($eksempel);
?>
