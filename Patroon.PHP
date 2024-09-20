<?php
$groote = "20";

for($i = 1; $i <= $groote; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

for($i = $groote; $i >= 1; $i--) {
    for($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
?>