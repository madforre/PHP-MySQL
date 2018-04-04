<?php
//변수의 자료형(타입 type)

$a = 10; //정수(integer)
$b = 2.0; //실수(double)
$c = 'A'; // 문자열
$d = "manso"; //문자열
$e = array(1,2,3); // array 객체
$bool = true; // boolean
$strNull = null; //null

class A{
    
}

$classA=new A();


$type = [$a,$b,$c,$d,$e,$bool,$strNull];

// 변수 자료형이 ~가 맞는지?

echo "<br>is_~~ 타입이 맞으면 true를 리턴하는 내장함수<br><br>";
echo is_int($a); // 정수형 int
echo "<br>";
echo is_long($a); // 정수형 long
echo "<br>";
echo is_double($b); // 실수형 double
echo "<br>";
echo is_float($b); // 실수형 float
echo "<br>";
echo is_real($b); // 실수형(double 이나 float)
echo "<br>";
echo is_string($d); // string
echo "<br>";
echo is_string($c); // string
echo "<br>";
echo is_array($e); // array
echo "<br>";
echo is_object($classA); // array
echo "<br>";
echo " >>> ".is_null($classA); //null 아무것도 없기 때문에 아니라는 것이다. 즉 false라는 것.