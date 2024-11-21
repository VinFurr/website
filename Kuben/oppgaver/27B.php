<?php

$eksempel = fopen("./27A.csv","r");

while(! feof($eksempel)) {
  $minliste = fgetcsv($eksempel,1000,";");
  $listelengde = count($minliste);
  $teller = $listelengde-1;
  for ($a=0; $a <= $teller; $a++) {
    //print_r ($minlist);
    print $minliste[$a];
    print ' ';
  }

  if ($minliste[$a] < $teller) {
    print '<p><hr><p>';
  }
}

fclose($eksempel);

?>
