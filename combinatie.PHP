<?php

$teller = 0;

while($teller <= 999) { 
    if($teller <= 9) {
        echo "00$teller \n";
    }elseif($teller <= 99){
        echo "0$teller \n";
    }else{
        echo "$teller \n";
    }
    $teller++;
}

?>