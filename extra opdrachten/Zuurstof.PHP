<?php

$cilinderinhoud = readline("Hoeveel liter?: \n");
$bar = readline("Hoeveel druk op de manometer in bar?: \n");
$lpm = readline("Hoeveel benodigd aantal liter zuurstof per minuut?: \n");

$minuten = ($cilinderinhoud * $bar) / $lpm;

echo"De patiënt kan de fles nog $minuten minuten gebruiken"

?>