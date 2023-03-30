<?php
$array = [
    'title' => 'урок',
    'lesson_count' => 20,
    'lessons' => ['lesson1' => 'переменные'],
    'title' => null,
];

var_dump($array);
$result = print_r($array, true); // true чтобы не выводил в консоль, а возвращал в $result
echo $result;

