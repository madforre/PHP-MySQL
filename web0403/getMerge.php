<?php

$arr1 = array("M","A","N","S","O");
$arr2 = array("M1","A1","N1","S1","O1");
$arr3 = array_merge($arr1,$arr2); // 두개의 배열을 하나로 합치는 PHP 내장함수. >> 하나의 새로운 배열 생성.

echo "<br>합친 배열<br><pre>";
print_r($arr3);
echo "</pre>";

//
//$arr3 = implode(',',$arr3); // 배열을 구분하여 문자열로 만들어주는 PHP 내장함수.
//
//$arr3 = explode(',',$arr3); // 문자열을 구분하여 배열로 만들어주는 PHP 내장함수.