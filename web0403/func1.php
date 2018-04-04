<?php

// 배열의 내장함수

$week = array('월','화','수','목','금','토','일');
echo gettype($week)."<br>";
echo "<pre>";
print_r($week);
echo "</pre>";

$weekStr=implode(',',$week); // 배열 >> 문자열
echo gettype($weekStr)."<br>";
echo $weekStr."<br>";

$arrWeek=explode(',',$weekStr); // 문자열 >> 배열
echo gettype($arrWeek)."<br>";

echo "<pre>";
print_r($arrWeek);
echo "</pre>";

?>