<?php

$I = 1;
$V = 5;
$X = 10;
$L = 50;
$C = 100;
$D = 500;
$M = 1000;

$input = readline("Wat wilt u berekenen in Romeinse getallen: ");

// Convert input to integer
$number = (int) $input;

// Define an array of Roman numerals and their values
$romanNumerals = array(
    'M' => $M,
    'CM' => $M - $C,
    'D' => $D,
    'CD' => $D - $C,
    'C' => $C,
    'XC' => $C - $X,
    'L' => $L,
    'XL' => $L - $X,
    'X' => $X,
    'IX' => $X - $I,
    'V' => $V,
    'IV' => $V - $I,
    'I' => $I
);

// Convert the number to a Roman numeral
$roman = '';
foreach ($romanNumerals as $key => $value) {
    while ($number >= $value) {
        $roman .= $key;
        $number -= $value;
    }
}

echo "De Romeinse waarde is: $roman";

?>