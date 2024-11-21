 <?php

 // Lager bilde, tall angir størrelse i pixler
 $eksempel = imagecreatetruecolor(200, 200);

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
 //DNB          2,58%   9.288
 imagefilledarc($eksempel, 100, 100, 200, 100,       0,   9, $green, IMG_ARC_PIE);
 //Statoil      11,61%  41.796
 imagefilledarc($eksempel, 100, 100, 200, 100,   9,  51, $yellow, IMG_ARC_PIE);
 //Europris     2,58%   9.288
 imagefilledarc($eksempel, 100, 100, 200, 100,  51,  60, $red, IMG_ARC_PIE);
 //Gjensidige   2,59%   9.324
 imagefilledarc($eksempel, 100, 100, 200, 100,  60,  70, $green, IMG_ARC_PIE);
 //Kongsberg    9,68%   34.848
 imagefilledarc($eksempel, 100, 100, 200, 100,  70, 105, $yellow, IMG_ARC_PIE);
 //Hydro        6,5%    23.4
 imagefilledarc($eksempel, 100, 100, 200, 100, 105, 128, $red, IMG_ARC_PIE);
 //Thon-gruppen 1,3%    4.68
 imagefilledarc($eksempel, 100, 100, 200, 100, 128, 133, $green, IMG_ARC_PIE);
 //Orkla        10,3%   37.08
 imagefilledarc($eksempel, 100, 100, 200, 100, 133, 170, $yellow, IMG_ARC_PIE);
 //REC          38,7%   139.32
 imagefilledarc($eksempel, 100, 100, 200, 100, 170, 309, $red, IMG_ARC_PIE);
 //SAS          13%     46.8
 imagefilledarc($eksempel, 100, 100, 200, 100, 309, 356, $green, IMG_ARC_PIE);
 //XXL          1,3%    4.68
 imagefilledarc($eksempel, 100, 100, 200, 100, 356, 360, $yellow, IMG_ARC_PIE);
 //imagefilledarc ( ressurs , radius , radius , diameter , radius , start gradtall , slutt gradtall , farge  , stil )

 //Flush bildet (send det til skjerm).
 header('Content-type: image/png');
 imagepng($eksempel);
 imagedestroy($eksempel);
 ?>
