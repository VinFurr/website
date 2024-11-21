<?php

// Lager bilde, tall angir størrelse i pixler
$eksempel = imagecreatetruecolor(100, 100);

//Lager gjennomsiktig bakgrunn
imagesavealpha($eksempel, true);
$trans_colour = imagecolorallocatealpha($eksempel, 0, 0, 0, 127);
imagefill($eksempel, 0, 0, $trans_colour);

//Farger i RGB
$yellow     = imagecolorallocate($eksempel, 255, 255,0);
$darkyellow = imagecolorallocate($eksempel, 204, 204, 0);
$green     = imagecolorallocate($eksempel, 0, 255, 0);
$darkgreen = imagecolorallocate($eksempel, 0, 153, 0);
$red      = imagecolorallocate($eksempel, 255, 0, 0);
$darkred  = imagecolorallocate($eksempel, 204, 0, 0);

//Lager 3D effekt
    for ($i = 60; $i > 50; $i--) {
        imagefilledarc($eksempel, 50, $i, 100, 50, 0,   45, $darkgreen, IMG_ARC_PIE);
        imagefilledarc($eksempel, 50, $i, 100, 50, 45,  75, $darkyellow, IMG_ARC_PIE);
        imagefilledarc($eksempel, 50, $i, 100, 50, 75, 360, $darkred,  IMG_ARC_PIE);
    }

imagefilledarc($eksempel, 50, 50, 100, 50, 0, 45, $green, IMG_ARC_PIE);
imagefilledarc($eksempel, 50, 50, 100, 50, 45, 75 , $yellow, IMG_ARC_PIE);
imagefilledarc($eksempel, 50, 50, 100, 50, 75, 360 , $red, IMG_ARC_PIE);
//imagefilledarc ( ressurs , radius , radius , diameter , radius , start gradtall , slutt gradtall , farge  , stil )

//Flush bildet (send det til skjerm).
header('Content-type: image/png');
imagepng($eksempel);
imagedestroy($eksempel);
?>
