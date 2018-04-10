<?php
$num1=10;
$num2=1.1;
$str="manso";
$arr=array(1,2,3,4,5);
// 변수의 자료형
echo gettype($num1)."<br>";
echo gettype($num2)."<br>";
echo gettype($str)."<br>";
echo gettype($arr)."<br>";
// 변수의 자료형과 값
echo "<pre>";
var_dump($num1);
var_dump($num2);
var_dump($str);
var_dump($arr);
echo "</pre>";
// 배열의 구조
echo "<pre>";
print_r($arr);
echo "</pre>";