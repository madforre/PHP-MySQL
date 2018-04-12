<?php
// 수학 함수 정리
$num1=-100;
echo abs($num1)."<br>"; // 절댓값

$num2=25.44258;
//0~4 내림, 5~9 올림


echo round($num2)."<br>"; 
//1의 자리까지(정수값만)

echo round($num2,-1)."<br>";
//-(정수)일의 자리에서 반올림

echo round($num2,-2)."<br>";
//십의자리에서 반올림

echo round($num2,1)."<br>";
// 소수 첫째자리까지 반올림

echo round($num2,2)."<br>";
// 소수 두번째자리까지 반올림

echo round($num2,3)."<br>";
// 소수 세번째자리까지 반올림

echo round($num2,4)."<br>";
// 소수 네번째자리까지 반올림

$num3=2.2;

echo ceil($num3)."<br>"; 
//올림 가장 가까운 큰 정수
echo floor($num3)."<br>";
//내림 가장 가까운 작은 정수

echo max(10,5,300,100)."<br>"; //가장 수
echo min(10,5,300,100)."<br>"; //가장 작은수

?>