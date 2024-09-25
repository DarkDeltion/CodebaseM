<?php

$product1 = (float)readline("Wat is het bedrag van product 1?\n");
$product2 = (float)readline("Wat is het bedrag van product 2?\n");
$product3 = (float)readline("Wat is het bedrag van product 3?\n");
$product4 = (float)readline("Wat is het bedrag van product 4?\n");
$product5 = (float)readline("Wat is het bedrag van product 5?\n");
$product6 = (float)readline("Wat is het bedrag van product 6?\n");

$totaal = $product1 + $product2 + $product3 + $product4 + $product5 + $product6;

echo "Totaal om te betalen is $totaal euro's \n";

while($totaal > 0){
    $betaalbedrag = (float)readline("Met hoeveel wilt u betalen?\n");
    
    if($betaalbedrag < $totaal){
        echo "U moet nog ".($totaal - $betaalbedrag)." euro's betalen.\n";
    } elseif($betaalbedrag > $totaal) {
        $geld = $betaalbedrag - $totaal;
        echo "U ontvangt $geld euro's terug.\n";
        echo "Bedankt voor de betaling.\n";
        break;
    } else {
        echo "Bedankt voor de betaling.\n";
        break;
    }
    
    $totaal -= $betaalbedrag;
}
?>