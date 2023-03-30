<?php

$clients = file(__DIR__ . "/clients.txt"); // строки файла в массив

$i = 0;
while ($i < count($clients)) {
    echo $i . ': ' . $clients[$i];
    $i++;
}
