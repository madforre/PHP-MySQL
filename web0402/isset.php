<?php

//isset(변수) "변수 있느냐?"


$userId="soso";
$userPw="11111";
$userAge=11;
$userPhone="010-0001-1110";
$userAddr="";
$userAddr2;

echo isset($userId)."<br>";
echo isset($userPw)."<br>";
echo isset($userAge)."<br>";
echo isset($userPhone)."<br>";
echo isset($userAddr)."<br>";
echo isset($userAddr2)."<br>"; //변수에 초기화 값을 안줬으므로 비어있는 상태.

echo "=========================================<br><br>";

echo ">>>  ".empty($userId)."<br>";
echo ">>>  ".empty($userPw)."<br>";
echo ">>>  ".empty($userAge)."<br>";
echo ">>>  ".empty($userPhone)."<br>";
echo ">>>  ".empty($userAddr)."<br>";
echo ">>>  ".empty($userAddr2)."<br>";