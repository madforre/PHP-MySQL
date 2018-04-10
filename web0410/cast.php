<?php

// 자료형 변환
// 변수의 타입(자료형)을 변환 cast
$strNum="100";
$intStr=100;
echo gettype($strNum)."<br>";
echo $strNum."<br>";
echo "=====kojn i/.=============<br>";

echo intval($strNum)."<br>"; // 정수형 변환
echo gettype(intval($strNum))."<br>";
echo "==================<br>";

echo doubleval($strNum)."<br>"; // double
echo gettype(doubleval($strNum))."<br>";
echo "==================<br>";

echo gettype($intStr)."<br>";
echo strval($intStr)."<br>"; // string 형
$str2=strval($intStr);
echo $str2."<br>";
echo gettype(strval($intStr))."<br>";

?>
