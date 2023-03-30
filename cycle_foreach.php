<?php

$clients = file(__DIR__ . "/clients.txt"); // строки файла в массив

foreach ($clients as $client) {
    echo $client;
}

foreach ($clients as $key => $client) { // тогда в переменную key кладет ключ
    echo $key . ': ' . $client;
}