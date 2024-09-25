<?php

$options = array("steen", "papier", "schaar", "lizard", "spock");
$SPS = $options[array_rand($options)];

$input = readline("Kies uit: Steen, Papier, Schaar, Lizard, Spock:\n");

$input = strtolower($input);

echo "computer: $SPS\n";
echo "speler: $input\n";


if ($input == $SPS) {
    echo "Gelijkspel\n";
} elseif (
    ($input == "steen" && ($SPS == "schaar" || $SPS == "lizard")) ||
    ($input == "papier" && ($SPS == "steen" || $SPS == "spock")) ||
    ($input == "schaar" && ($SPS == "papier" || $SPS == "lizard")) ||
    ($input == "lizard" && ($SPS == "papier" || $SPS == "spock")) ||
    ($input == "spock" && ($SPS == "steen" || $SPS == "schaar"))
) {
    echo "Jij wint!\n";
} else {
    echo "Computer wint!\n";
}

?>