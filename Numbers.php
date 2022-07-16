<?php

//inteiros 

$n1 = 5983;
$n2 = 23888;

var_dump (is_int(n1));
var_dump (is_int(n2));

//Flutuante 

$n3 = 5.983;
$n4 = 23.888;

var_dump (is_float(n3));
var_dump (is_float(n4));


//Booleano 

$b1 = true;
$b2 = false;

var_dump(is_bool(b1));
var_dump(is_bool(b2));

//Nan

$test = "teste";

var_dump(is_nan($test));

//Strings Númericas

$st = "5983";
$st2 = 23888;
var_dump(is_numeric($st));
var_dump(is_numeric($st2));

//Infinity

$fi = 1.23e3;
$fi2 = 1.23e-3;

var_dump(is_finite($fi));
var_dump(is_finite($fi2));

//nan 

$nan = "teste";

var_dump(is_nan($nan));

//Casting Strings e Floats para Integers

// Cast float to int
$float = 59.83;
$int_cast = (int)$float;
echo $int_cast;

echo "<br>";

// Cast string to int
$string = "59.83";
$int_cast0 = (int)$string;
echo $int_cast0;
