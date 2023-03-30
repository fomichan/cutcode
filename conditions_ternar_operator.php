<?php

$a = 7;

$b = $a > 0 ? "a > 0" : "a <= 0";

echo $b;


$count = 8;

echo "Товаров: ";
echo $count ?: "нет";
// эквивалентно $count ? $count : "нет"
// те если a = 0 (приводится к false)


echo $count ?? "Переменная $count не существует";
// эквивалент isset($count) ? $count : "Переменная $count не существует";


$c = 1;
$d = 2;
$c > $d ? $result = "A > B" : $result = "A <= B"; // можно присваивать
echo $result;




