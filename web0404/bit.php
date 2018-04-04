<?php
// 비트 연산자 0 1

$num1=10; // 1010
$num2=8;// 1000

echo $num1 & $num2 ; // 1000 서로 같으면 1
echo "<br>";
echo $num1 | $num2 ; // 1010 하나라도 1이면 1
echo "<br>";
echo $num1 ^ $num2 ; // 0010 . ^ 값이 다르면 1
echo "<br>";

echo ~$num1; // 부정이다. 거꾸로. 반대. 1010 -> 0101 모르겠음
echo "<br>";
echo $num1 << 2 ;// 왼쪽으로 2비트 이동(커진다) 쉬프트 연산
echo "<br>";
echo $num1 >> 2 ;// 오른쪽으로 2비트 이동(작아진다) 쉬프트 연산
echo "<br>";
?>


