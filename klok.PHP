<?php

date_default_timezone_set('cet');

while(true) {
    $today = date("Y-m-d H:i:s");
    echo "$today \n";
    sleep(1);
    echo "\033[2J\033[H";
}

?>