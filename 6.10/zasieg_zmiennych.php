<?php

$variable = 'aaaaa';

echo $variable . "<br />";

$variable = 'bbbbb'; 

echo $variable . "<br />"; 

function a() {

    $variable = 'cccc'; // sie nie zmieni
}

a(); 

echo $variable . "<br />";

function b() {

    global $variable; // zmienna z globalnego scopa

    $variable = 'ddddd';
}

b();

echo $variable . "<br />";

function c() {
    global $new;

    $new = 'new';
}

c();

global $new;

echo $new . "<br />";

include "./other.php";

global $otherVariable; // sciagniecie zmiennej z innego pliku 

echo $otherVariable . "<br />";

d(); // funckja z innego pliku bez scopa globalnego

$a = 5;

echo $a . "<br />";

function e($a) {

    $a = 10; // nie zmienia zasiegu globalnego
}

e($a);

echo $a . "<br />";

function f(&$a) {
    $a = 10; // zmienia globalnie
}

f($a);

echo $a  . "<br />";