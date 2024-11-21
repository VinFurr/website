<?php

// Lager bilde, tall angir størrelse i pixler
$eksempel = imagecreatetruecolor(500, 500);

//Lager gjennomsiktig bakgrunn
imagesavealpha($eksempel, true);
$trans_colour = imagecolorallocatealpha($eksempel, 0, 0, 0, 127);
imagefill($eksempel, 0, 0, $trans_colour);

//Farger i RGB
$yellow     = imagecolorallocate($eksempel, 255, 255,0);
$darkyellow = imagecolorallocate($eksempel, 150, 150, 0);
$green     = imagecolorallocate($eksempel, 0, 255, 0);
$darkgreen = imagecolorallocate($eksempel, 0, 140, 0);
$red      = imagecolorallocate($eksempel, 255, 0, 0);
$darkred  = imagecolorallocate($eksempel, 150, 0, 0);
$blue= imagecolorallocate($eksempel, 0, 128, 255);
$black= imagecolorallocate($eksempel, 0, 0, 0);
$pink= imagecolorallocate($eksempel, 255, 128, 192);
$brown= imagecolorallocate($eksempel, 128, 64, 0);
$purple= imagecolorallocate($eksempel, 128, 0, 255);
/*//Lager 3D effekt
    for ($i = 60; $i > 50; $i--) {
        imagefilledarc($eksempel, 50, $i, 100, 50, 0,   45, $darkgreen, IMG_ARC_PIE);
        imagefilledarc($eksempel, 50, $i, 100, 50, 45,  75, $darkyellow, IMG_ARC_PIE);
        imagefilledarc($eksempel, 50, $i, 100, 50, 75, 360, $darkred,  IMG_ARC_PIE);
    }
*/
    //DNB          2,58%   9.288
    imagefilledarc($eksempel, 250, 250, 500, 250,   0,   9, $green, IMG_ARC_PIE);
    //Statoil      11,61%  41.796
    imagefilledarc($eksempel, 250, 250, 500, 250,   9,  51, $yellow, IMG_ARC_PIE);
    //Europris     2,58%   9.288
    imagefilledarc($eksempel, 250, 250, 500, 250,  51,  60, $red, IMG_ARC_PIE);
    //Gjensidige   2,59%   9.324
    imagefilledarc($eksempel, 250, 250, 500, 250,  60,  70, $darkgreen, IMG_ARC_PIE);
    //Kongsberg    9,68%   34.848
    imagefilledarc($eksempel, 250, 250, 500, 250,  70, 105, $darkyellow, IMG_ARC_PIE);
    //Hydro        6,5%    23.4
    imagefilledarc($eksempel, 250, 250, 500, 250, 105, 128, $darkred, IMG_ARC_PIE);
    //Thon-gruppen 1,3%    4.68
    imagefilledarc($eksempel, 250, 250, 500, 250, 128, 133, $blue, IMG_ARC_PIE);
    //Orkla        10,3%   37.08
    imagefilledarc($eksempel, 250, 250, 500, 250, 133, 170, $black, IMG_ARC_PIE);
    //REC          38,7%   139.32
    imagefilledarc($eksempel, 250, 250, 500, 250, 170, 309, $pink, IMG_ARC_PIE);
    //SAS          13%     46.8
    imagefilledarc($eksempel, 250, 250, 500, 250, 309, 356, $brown, IMG_ARC_PIE);
    //XXL          1,3%    4.68
    imagefilledarc($eksempel, 250, 250, 500, 250, 356, 360, $purple, IMG_ARC_PIE);
    //imagefilledarc ( ressurs , radius , radius , diameter , radius , start gradtall , slutt gradtall , farge  , stil )

//Flush bildet (send det til skjerm).
header('Content-type: image/png');
imagepng($eksempel);
imagedestroy($eksempel);

/*
// Lager bilde, tall angir størrelse i pixler
$eksempel = imagecreate(500, 500);

$background = imagecolorallocate($eksempel, 255, 100, 0);

//Farger i RGB
$yellow     = imagecolorallocate($eksempel, 255, 255,0);
$green     = imagecolorallocate($eksempel, 0, 255, 0);
$red      = imagecolorallocate($eksempel, 255, 0, 0);


imagefilledarc($eksempel, 100, 100, 200, 100, 0, 45, $green, IMG_ARC_PIE);
imagefilledarc($eksempel, 100, 100, 200, 100, 45, 75 , $yellow, IMG_ARC_PIE);
imagefilledarc($eksempel, 100, 100, 200, 100, 75, 360 , $red, IMG_ARC_PIE);
//imagefilledarc ( ressurs , radius , radius , diameter , radius , start gradtall , slutt gradtall , farge  , stil )

//Flush bildet (send det til skjerm).
header('Content-type: image/png');
imagepng($eksempel);
imagedestroy($eksempel);
*/
?>
