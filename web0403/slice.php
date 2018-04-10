<?php

$arr1 = array("M","A","N","S","O");
$arr2 = array("M1","A1","N1","S1","O1");
$rs = array_merge($arr1,$arr2); // 두개의 배열을 하나로 합치는 PHP 내장함수. >> 하나의 새로운 배열 생성.

echo "합쳐진 배열 <pre>";
print_r($rs);
echo "</pre>";

$rs = array_slice($rs,5); // 시작위치(5번지부터 시작하고 그 전 인덱스는 전부 slice);

echo "\$rs = array_slice(\$rs,5)인 경우";

echo "<pre>";
print_r($rs);
echo "</pre>";
echo implode('**',$rs)." <- 배열을 implode 함수로 문자열로 연결해 보았다. <br><br>";

echo "\$rs = array_slice(\$rs,0,3)인 경우";

$rs = array_slice($rs,0,3); //  0번지부터 3개를 제외하고 버린다.

echo "<pre>";
print_r($rs);
echo "</pre>";

$rs=array_slice($rs,0); // 시작위치 0번지부터 시작하고 나머지는 버리므로 버리는게 없다.

echo "\$rs = array_slice(\$rs,0)인 경우";

echo "<pre>";
print_r($rs);
echo "</pre>";

echo implode('**',$rs)." <- 배열을 implode 함수로 문자열로 연결해 보았다. <br><br>";