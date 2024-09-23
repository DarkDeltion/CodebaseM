<?php
$paar = 0;
$prijs = 50;

$klantenkaart = readline("Heeft u een klanten kaart? Ja/Nee \n");

$klantenkaart = strtolower($klantenkaart);

echo "$klantenkaart \n";



$paar = readline("hoeveel paar schoenen wil je hebben? \n");
echo $paar;

$totaal = $prijs * $paar;

echo "De prijs voor $paar schoenen is: $totaal euro";
?>