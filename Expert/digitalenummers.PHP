<?php

$nummers = readline("kies wat getallen. Zorg er voor dat er een spatie is.\n");

// Split the input into individual numbers
$numbers = explode(' ', $nummers);

// Loop through each number
foreach ($numbers as $number) {
    switch ($number) {
        case "1":
            echo "   ##\n";
            echo "  ###\n";
            echo "   ##\n";
            echo "   ##\n";
            echo "   ##\n";
            echo "   ##\n";
            echo " ######\n";
            echo "\n";
            break;
        case "2":
            echo "######\n";
            echo "     #\n";
            echo "     #\n";
            echo "######\n";
            echo "#     \n";
            echo "#     \n";
            echo "######\n";
            echo "\n";
            break;
        case "3":
            echo "######\n";
            echo "     #\n";
            echo "     #\n";
            echo "######\n";
            echo "     #\n";
            echo "     #\n";
            echo "######\n";
            echo "\n";
            break;
        case "4":
            echo "#    #\n";
            echo "#    #\n";
            echo "#    #\n";
            echo "######\n";
            echo "     #\n";
            echo "     #\n";
            echo "     #\n";
            echo "\n";
            break;
        case "5":
            echo " ##### \n";
            echo "#      \n";
            echo "#      \n";
            echo " ##### \n";
            echo "      #\n";
            echo "      #\n";
            echo " ######\n";
            echo "\n";
            break;
        case "6":
            echo " ##### \n";
            echo "#      \n";
            echo "#      \n";
            echo "###### \n";
            echo "#     #\n";
            echo "#     #\n";
            echo " ##### \n";
            echo "\n";
            break;
        case "7":
            echo "######\n";
            echo "     #\n";
            echo "     #\n";
            echo "    # \n";
            echo "    # \n";
            echo "   #  \n";
            echo "   #  \n";
            echo "\n";
            break;
        case "8":
            echo " ##### \n";
            echo "#     #\n";
            echo "#     #\n";
            echo " ##### \n";
            echo "#     #\n";
            echo "#     #\n";
            echo " ##### \n";
            echo "\n";
            break;
        case "9":
            echo " ##### \n";
            echo "#     #\n";
            echo "#     #\n";
            echo " ######\n";
            echo "      #\n";
            echo "      #\n";
            echo " ##### \n";
            echo "\n";
            break;
        case  "0":
            echo "  ##### \n";
            echo "#      #\n";
            echo "#      #\n";
            echo "#      #\n";
            echo "#      #\n";
            echo "#      #\n";
            echo "  ##### \n";
            echo "\n";
            break;
        default:
            echo "Invalid number: $number\n";
            break;
    }
}

?>