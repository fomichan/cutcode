<?php

$clients = file(__DIR__ . "/clients.txt"); // строки файла в массив

$i = 0;
 do {
    echo $i . ': ' . $clients[$i];
    $i++;
} while ($i < count($clients));