<?php
$array = [
    1 => 'элемент 1',
    'элемент 2', // key задался автоматом 2
    'три' => 'элемент 3',
    '4' => 'элемент 4', // key привелся к int
];

var_dump($array);

echo $array['4'] . PHP_EOL; // 'элемент 4'
echo $array[4] . PHP_EOL; // 'элемент 4'

