<?php
$arr1=array("Volvo", "BMW", "Toyota");
$arr2=array(4=>"b",1=>"a",2=>"c");

echo "배열 \$arr1=array(\"volvo\", \"BMW\", \"Toyota\");";

print "<pre>";
print_r($arr1);
print "</pre>";

echo "배열 오름차순";

sort($arr1); // 배열을 오름차순으로 정렬
print "<pre>";
print_r($arr1);
print "</pre>";

echo "배열 내림차순";

rsort($arr1); // 배열을 내림차순으로 정렬
print "<pre>";
print_r($arr1);
print "</pre>";

// 연관배열의 키 정렬

echo "연관배열 \$arr2=array(4=>\"b\",1=>\"a\",2=>\"c\");";

print "<pre>";
print_r($arr2);
print "</pre>";

echo "값(밸류) 기준 연관배열 오름차순";

asort($arr2); // 연관배열을 밸류값에 따라 오름차순으로 정렬
print "<pre>";
print_r($arr2);
print "</pre>";

echo "값(밸류) 기준 연관배열 내림차순";

arsort($arr2); // 연관배열을 밸류값에 따라 내림차순으로 정렬
print "<pre>";
print_r($arr2);
print "</pre>";

            // k 는 key로 기억 r 은 리버스, 즉 역순

echo "키 기준 연관배열 오름차순";

ksort($arr2); // 연관배열을 키 값에 따라 오름차순으로 정렬
print "<pre>";
print_r($arr2);
print "</pre>";

echo "키 기준 연관배열 내림차순";

krsort($arr2); // 연관배열을 키 값에 따라 내림차순으로 정렬
print "<pre>";
print_r($arr2);
print "</pre>";

?>