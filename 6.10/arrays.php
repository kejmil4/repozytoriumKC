<?php

//tablice

$arr1 = [1,2,3,4,5,6];

var_dump($arr1); // daje zmienna tak jak widzi ją php

echo "<br />";

//tablica asocjacyjna

$arr2 = [
    'k1' => 'v1',
    'k2' => 'v2',
    'papież' => 'kremówka',
    69 => 420,
    'jp2' => 2137

];

var_dump($arr2);

echo "<br />";


//tablica tablic

$arr3 = [
    [1,2,3,4],
    [5,6,7,8]
];

var_dump($arr3);

echo "<br />";

//wyswietlenie tablicy - petla for

echo "<ul>";

for ($i = 0; $i < count($arr1); $i++) {
    echo "<li>{$arr1[$i]}</li>";  
 }

 echo "</ul>";

 // wyswietlenie tablicy - petla foreach

 echo "<ul>";

 foreach ($arr1 as $item) {
    echo "<li>{$item}</li>";
 }

 echo "</ul>";

 // wyswietlenie tablicy z kluczami - foreach

 echo "<ul>";
 foreach($arr2 as $key => $item) {
    echo "<li>{$key} => {$item}</li>";

 };

 echo "</ul";
 
 foreach (range(0, 10) as $i) {
    echo $i . "<br />";
 };

 


 