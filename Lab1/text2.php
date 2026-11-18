<?php
$a = 7;
$b = 3;
echo "Cong: " . ($a + $b) . "<br>";
echo "Tru: " . ($a - $b) . "<br>";
echo "Nham: " . ($a * $b) . "<br>";
echo "Chia: " . ($a / $b) . "<br>";
echo "Chia lay du: " . ($a % $b) . "<br>";

$so = 5;
$chuoi = "5";
echo "<pre>";
echo "== : ";  var_dump($so == $chuoi);   
echo "=== : "; var_dump($so === $chuoi);  
echo "!= : ";  var_dump($so != $chuoi);  
echo "<> : ";  var_dump($so <> $chuoi);   
echo "!== : "; var_dump($so !== $chuoi);

$van = "hello word";
echo strtoupper($van) . "<br>";
echo strtolower($van) . "<br>";
echo mb_strtoupper($van) . "<br>";
echo mb_strtolower($van) . "<br>";


var_dump((int)"123 abc");  
var_dump((int)"abc 123"); 


echo "<pre>";
var_dump(10);      
var_dump(3.14);    
var_dump("Noi");   
var_dump(true);    