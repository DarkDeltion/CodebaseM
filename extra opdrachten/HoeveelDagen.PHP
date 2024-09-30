<?php

echo 'berekening voor "over hoeveel dagen"' . "\n";
$invoerjaar = readline("welk jaartal?\n");
$invoermaand = readline("welk maand getal?\n");
$invoerdag = readline("welk dag getal?\n");

date_default_timezone_set('cet');

$vandaagjaar = date('Y');
$vandaagmaand = date('m');
$vandaagdag = date('d');

$jaar =  $invoerjaar -  $vandaagjaar;
$maand = $invoermaand - $vandaagmaand;
$dag = $invoerdag - $vandaagdag;

echo "dat is over $jaar jaar\n";
echo "over $maand maanden\n";
echo "en over $dag dagen\n  ";



?>