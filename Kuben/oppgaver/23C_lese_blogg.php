<?php
$eksempel = fopen("./23B_lage_blogg.txt", "r");
print fread($eksempel,filesize("23B_lage_blogg.txt"));
fclose($eksempel);
?>
