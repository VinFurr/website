<?php

$eksempel = imagecreate(100, 100);

// Bakgrunnsfarge
$background = imagecolorallocate($eksempel, 255, 0, 0);

// Farger med RGB
$white = imagecolorallocate($eksempel, 255, 255, 255);
$black = imagecolorallocate($eksempel, 0, 0, 0);
$yellow = imagecolorallocate($eksempel, 255, 255, 0);

// Farger med hexadecimale verdier
//$white = imagecolorallocate($eksempel, 0xFF, 0xFF, 0xFF);
//$black = imagecolorallocate($eksempel, 0x00, 0x00, 0x00);
//$yellow = imagecolorallocate($eksempel, 0xFF, 0xFF, 0x00);

imagefilledarc($eksempel, 50, 50, 100, 50, 0, 45, $white, IMG_ARC_PIE);
imagefilledarc($eksempel, 50, 50, 100, 50, 45, 75 , $black, IMG_ARC_PIE);
imagefilledarc($eksempel, 50, 50, 100, 50, 75, 360 , $yellow, IMG_ARC_PIE);

//imagefilledarc ( ressurs , radius , radius , diameter , radius , start gradtall , slutt gradtall , farge  , stil )

header('Content-type: image/png');
imagepng($eksempel);
imagedestroy($eksempel);
?>
