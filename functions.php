<?php

// вложенные функции

function createMyFunction() {
    function printHello() {
        echo "Hello";
    }
    echo "Function crated";
}



if (function_exists('printHello')){
    printHello();
} else {
    echo "Function is not exists";  // выполнится это т.к. printHello() еще не существует
}

createMyFunction();

if (function_exists('printHello')){
    printHello();       // выполнится это тк после вызова createMyFunction() функция printHello() уже существует
} else {
    echo "Function is not exists";
}



// Анонимные (лямбда) функции

$upperizer = function ($value) {
    echo mb_strtoupper($value) . PHP_EOL;
};

$upperizer('кофе');


$drinks = [
  'кофе', 'молоко', 'вода'
];

array_walk($drinks, function ($value, $key) {
    echo $key . ': ' . mb_strtoupper($value) . PHP_EOL;
}); // анонимная функция как параметр. array_walk передает в него по очереди значения массива

// или можно
array_walk($drinks, $upperizer);




// Стрелочные функции

$a =100;
$b = 2;

$f = fn() => $a + $b;
echo $f();

//эквивалентно:
$f = function () use ($a, $b) {
    return $a + $b;
};
echo $f;



$g = fn($c) => $a + $b + $c; // a & b взяла из глобальной области видимости
echo $f(50);