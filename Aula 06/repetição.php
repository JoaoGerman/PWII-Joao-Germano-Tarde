<?php
$array = [2, 5, 7, 8, 10, 18, 30, 37, 38, 60];

foreach ($array as $numero) {
    switch ($array) {
        case $numero % 2 == 0:
            echo "$numero é par;\n";
            break;
        default:
            echo "$numero é impar;\n";  
        }

}

?>