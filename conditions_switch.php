<?php

$a = 7;

switch ($a) {
    case 0:
        echo "a = 0";
        break;
    case 1:
        echo "a = 1";
        break;
    default:
        echo "a != 0 and a != 1";
        break;
}


// Без break выполнятся все условия до конца switch:  a = 0 a = 1 a = 2
switch ($a) {
    case 0:
        echo "a = 0" . PHP_EOL;
        //break;
    case 1:
        echo "a = 1" . PHP_EOL;
        //break;
    case 2:
        echo "a = 2" . PHP_EOL;
        break;
    case 3:
        echo "a = 3" . PHP_EOL;
        break;
}




