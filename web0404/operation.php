<?php

// 증감 연산자

$i = 10;

echo $i++; 
//10
echo "<br>";
echo $i."<br>"; 
//11
echo ++$i."<br>"; 
//12
echo $i--."<br>"; 
//12
echo $i."<br>"; 
//11
echo --$i."<br>"; 
//10
echo $i."<br>"; 
//10

$arrInt=array(); // 자바스크립트 >> 배열.push(); //

for($i=0;$i<10;$i++){
    echo $i." ";
    array_push($arrInt,$i);
}

$members=array("m1","m2","m3","m4","m5");

echo "<br><br>";

foreach($members as $val){
    echo $val."<br>";
}

echo "<br>";

foreach($members as $key=>$val){
    echo $key."=>".$val."<br>";
}

echo "<pre>";
var_dump($members);
echo "</pre>";


echo "<pre>";
print_r($arrInt);
echo "</pre>";
//var_dump($arrInt);
?>