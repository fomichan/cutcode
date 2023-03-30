<?php

//
var_dump(0 <=> 5); // -1
var_dump(5 <=> 5); // 0
var_dump(9 <=> 5); // 1



$a = true;
$b = false;

var_dump($a and  $b);
var_dump($a or  $b);
var_dump($a xor  $b);
var_dump(!$a );
var_dump($a &&  $b);
var_dump($a ||  $b);




$t = false || true; // У || приоритет выше чем у =
$f = false or true; // У or приоритет ниже чем у =, сначала выполнится присвоение, or true просто игнорируется
var_dump($t, $f);



var_dump(false && false <=> true); // f
var_dump(false || false <=> true); // t
