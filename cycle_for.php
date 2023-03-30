<?php

for ($i = 0; $i < 5; $i++) {
    echo $i . PHP_EOL;
}
echo "i: " . $i . PHP_EOL;


$clients = [
  'Ivan',
  'Petr',
  'Sidor',
  'Mark',
  'Dmitry',
];

for ($i = 0; $i < count($clients); $i++) {
    file_put_contents(__DIR__ . '/clients.txt', $clients[$i] . PHP_EOL, FILE_APPEND); // FILE_APPEND чтобы каждый раз не затирала файл
}