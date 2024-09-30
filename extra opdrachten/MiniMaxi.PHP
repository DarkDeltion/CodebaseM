<?php

$randomnummers = array();
for ($i = 0; $i < 100; $i++) {
    $randomnummers[] = rand(1, 100);
}

$grootstenummer = max($randomnummers);
$kleinstenummer = min($randomnummers);

echo "grootste nummer: $grootstenummer\n";
echo "kleinst nummer: $kleinstenummer\n";
?>  