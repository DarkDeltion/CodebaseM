<?php
$paar = 0;
$prijs = 50;

$klantenkaart = readline("Heeft u een klanten kaart? Ja/Nee \n");

$klantenkaart = strtolower($klantenkaart);


if  ($klantenkaart == "ja") {
    $paar = readline("hoeveel paar schoenen wil je hebben? \n");

    $totaal = 0.9 * ($prijs * $paar);

    echo "De prijs voor $paar schoenen is: $totaal euro";
}elseif ($klantenkaart ==  "nee") {
    $paar = readline("hoeveel paar schoenen wil je hebben? \n");

    $totaal = $prijs * $paar;

    echo "De prijs voor $paar schoenen is: $totaal euro";
}else {
    $paar = readline("hoeveel paar schoenen wil je hebben? \n");

    $totaal = $prijs * $paar;

    echo "De prijs voor $paar schoenen is: $totaal euro";
}

?>