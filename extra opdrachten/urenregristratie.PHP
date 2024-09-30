<?php

$totaalwerkdagen = 0;

echo "Werkdag: Ma \n";
$MaandagUren = intval(readline("hoeveel uur? \n"));
$maandagMinuten = intval(readline("hoeveel Minuten? \n"));
echo "\n"; 

echo "Werkdag: Di \n";
$DinsdagUren = intval(readline("hoeveel uur? \n"));
$DinsdagMinuten = intval(readline("hoeveel Minuten? \n"));
echo "\n"; 

echo "Werkdag: Wo \n";
$WoensdagUren = intval(readline("hoeveel uur? \n"));
$WoensdagMinuten = intval(readline("hoeveel Minuten? \n"));
echo "\n"; 

echo "Werkdag: Do \n";
$DonderdagUren = intval(readline("hoeveel uur? \n"));
$DonderdagMinuten = intval(readline("hoeveel Minuten? \n"));
echo "\n"; 

echo "Werkdag: Vr \n";
$VrijdagUren = intval(readline("hoeveel uur? \n"));
$VrijdagMinuten = intval(readline("hoeveel Minuten? \n"));
echo "\n"; 


$totaalUren = $MaandagUren + $DinsdagUren + $WoensdagUren + $DonderdagUren + $VrijdagUren;
$totaalMinuten = $maandagMinuten + $DinsdagMinuten + $WoensdagMinuten  + $DonderdagMinuten + $VrijdagMinuten;

while($totaalMinuten >= 60){
    $totaalUren++;
    $totaalMinuten -= 60;
}


if($MaandagUren > 0 || $maandagMinuten > 0){
    $totaalwerkdagen++;
}
if($DinsdagUren > 0 || $DinsdagMinuten > 0){
    $totaalwerkdagen++;
}
if($WoensdagUren > 0 || $WoensdagMinuten > 0){
    $totaalwerkdagen++;
}
if($DonderdagUren > 0 || $DonderdagMinuten > 0){
    $totaalwerkdagen++;
}
if($VrijdagUren > 0 || $VrijdagMinuten > 0){
    $totaalwerkdagen++;
}

$days = [
    'Maandag' => $MaandagUren + $maandagMinuten / 60,
    'Dinsdag' => $DinsdagUren + $DinsdagMinuten / 60,
    'Woensdag' => $WoensdagUren + $WoensdagMinuten / 60,
    'Donderdag' => $DonderdagUren + $DonderdagMinuten / 60,
    'Vrijdag' => $VrijdagUren + $VrijdagMinuten / 60,
];

$maxTotaal = max($days);
$maxDay = array_search($maxTotaal, $days);

echo "Aantal werkdagen: $totaalwerkdagen \n";
echo "Totaal werktijden: $totaalUren uur en $totaalMinuten minuten \n";
echo "Meeste gewerkte dag: $maxDay \n";

?>