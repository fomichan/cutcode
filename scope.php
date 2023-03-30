<?php


$box1 = 'яблоки';
$box2 = 'айфон 16';

function house() {
    global $box1;
    $box1 = 'груши';
    $GLOBALS['box2'] = 'айфон 4';
}

house();

echo $box1 . PHP_EOL;
echo $box2 . PHP_EOL;


// Переменные по ссылке:

$box = 'кирпичики';

function buildLego(&$link) { // по ссылке передастся оригинал переменной
    $link = 'собранный конструктор';
    return true;
}

buildLego($box);
echo $box;


