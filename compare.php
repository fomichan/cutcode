<?php

$a = 10;
$b = 20;

var_dump($a == $b);
var_dump($a === $b); // тождественное равно (в тч по типу)
var_dump($a != $b);
var_dump($a <> $b);
var_dump($a !== $b); // тождественное неравно
var_dump($a > $b);
var_dump($a < $b);
var_dump($a >= $b);
var_dump($a <= $b);
var_dump($a <=> $b);




var_dump(123 == "123"); // true
var_dump(123 === "123"); // false

var_dump(123 == 123.0); // true
var_dump(123 === 123.0); // false



var_dump(false == "php"); // строка приведется к true если не пустая
var_dump(false == []); // пустой массив преобразуется в false

var_dump(null == "php"); // null эквивалентно false
var_dump(null == []);

var_dump(0 == "php"); // строки преобразуются в число. "php" преобразуется в 0
var_dump(0 == []); // массив всегда больше чем любое число, хоть и преобразуется в 0


var_dump(false == null); // t
var_dump(false === null); // f

var_dump(0 == null); // t
var_dump(0 === null); // f

var_dump("0" == null); // f  null приведется к пустой строке
var_dump("0" === null); // f

var_dump("0" == 0); // t
var_dump("0" === 0); // f



