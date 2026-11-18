<?php
$a = 10;
$b = 3;
echo "Cong: " . ($a + $b) . "<br>";
echo "Tru: " . ($a - $b) . "<br>";
echo "Nham: " . ($a * $b) . "<br>";
echo "Chia: " . ($a / $b) . "<br>";
echo "Chia lay du: " . ($a % $b) . "<br>";

$soNguyen = 5;
$chuoiSo = "5";
echo "<pre>";
echo "== : ";  var_dump($soNguyen == $chuoiSo);   
echo "=== : "; var_dump($soNguyen === $chuoiSo);  
echo "!= : ";  var_dump($soNguyen != $chuoiSo);  
echo "<> : ";  var_dump($soNguyen <> $chuoiSo);   
echo "!== : "; var_dump($soNguyen !== $chuoiSo);

$vanBan = "hello word";
echo strtoupper($vanBan) . "<br>";
echo strtolower($vanBan) . "<br>";
echo mb_strtoupper($vanBan) . "<br>";
echo mb_strtolower($vanBan) . "<br>";


var_dump((int)"123 abc");  
var_dump((int)"abc 123"); 



echo "<pre>";
var_dump(10);      
var_dump(3.14);    
var_dump("PHP");   
var_dump(true);    