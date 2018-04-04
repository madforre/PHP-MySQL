<?php
//push, pop
echo "----------------------------------------------------<br><br>";

$arr=array(1,2,3,4,5);
echo "push, pop 하기 전 배열의 길이 : ".count($arr);

echo " <br><br>원래 배열<br><pre>";
print_r($arr);
echo "</pre>";

echo "----------------------------------------------------<br><br>";

array_push($arr,10); // 배열 마지막 요소 뒤 추가
echo "배열 마지막 요소 뒤 추가 (push) 후 배열의 길이 : ";
echo count($arr);

echo " <br><br>push로 추가된 배열<br><pre>";
print_r($arr);
echo "</pre>";

echo "----------------------------------------------------<br><br>";

array_pop($arr); // 배열 마지막 요소부터 삭제
echo "배열 마지막 요소삭제 (pop) 후 배열의 길이 : ";
echo count($arr);

echo " <br><br>pop으로 하나가 삭제된 배열<br><pre>";
print_r($arr);
echo "</pre>";


echo "----------------------------------------------------<br><br>";