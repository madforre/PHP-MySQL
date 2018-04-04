<?php

// 배열 " 다수의 data를 순서대로 그룹화"
// 배열은 0번지부터 저장

$arrInt=array(1,2,3,4,5);

var_dump($arrInt);
echo "<br>";

echo "<pre>";
print_r($arrInt);
echo "</pre>";


foreach($arrInt as $test){
    echo $test."<br>";
}

?>