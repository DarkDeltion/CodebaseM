<?php

$file = file_get_contents('ElementenTellen.TXT');

$Apeldoorn = 0;
$kampen = 0;
$Zwolle = 0;
$Lelystad = 0;
$Dronten = 0;
$Elburg = 0;
$Emmeloord = 0;
$Heerde = 0;
$Zeewolde = 0;

$lines = explode("\n", $file);

foreach($lines as $line){
    if(strpos($line, "Apeldoorn") !== false){
        $Apeldoorn++;
    };
    if(strpos($line, "Kampen") !== false){
        $kampen++;
    };
    if(strpos($line, "Zwolle") !== false){
        $Zwolle++;
    };
    if(strpos($line, "Lelystad") !== false){
        $Lelystad++;
    };
    if(strpos($line, "Dronten") !== false){
        $Dronten++;
    };
    if(strpos($line, "Elburg") !== false){
        $Elburg++;
    };
    if(strpos($line,  "Emmeloord") !== false){
        $Emmeloord++;;
    };
    if(strpos($line,  "Heerde") !== false){
        $Heerde++;
    };
    if(strpos($line,   "Zeewolde") !== false){
        $Zeewolde++;
    }


}

echo  "Apeldoorn: $Apeldoorn\n";
echo "Kampen: $kampen\n";
echo  "Zwolle: $Zwolle\n";
echo "Lelystad: $Lelystad\n";
echo  "Apeldoorn: $Dronten\n";
echo "Elburg: $Elburg\n";
echo "Emmeloord $Emmeloord\n";
echo "Heerde: $Heerde\n";
echo "Zeewolde: $Zeewolde\n";
?>