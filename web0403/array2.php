<?php

// 배열 " 다수의 data를 순서대로 그룹화"
// 배열은 0번지부터 저장

$arrInt=array(1,2,3,4,5);
$arrInt2=[1,2,3,4,5];

var_dump($arrInt);
echo "<br>";

echo "<pre>";
print_r($arrInt);
echo "</pre>";

for($i=0;$i<count($arrInt2);$i++){
    echo "\$arrInt2[".$i."] => ".$arrInt2[$i]."<br>";
    echo "[".$i."] => ".$arrInt2[$i]."<br>";
}
//echo "$arrInt2"; 변수를 문자열로 감싸도 출력된다.
//                    배열은 문자열이 아니기 때문에 출력이 안됨