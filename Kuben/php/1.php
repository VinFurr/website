<?php
$timer = $_POST['timer'];
$timer_justert = str_replace(",", ".", $timer);
$konstant = 60;
$minutter = $timer_justert*$konstant;
print "Du hadde ".$timer. " timer <p>";
print "Det er ".$minutter. " minutter";
?>
