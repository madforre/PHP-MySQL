<?php

//함수
// $name, $num1,$num2,$sum << 지역변수

$name = "man"; //전역변수

function func1($name,$num1,$num2){
    $sum=$num1+$num2;
    echo "당신의 ".$name."성적은 ".$sum."입니다<br>";
}

func1("영어",100,50);
echo $name.'<br>';
func1("수학",50,200);
echo $name.'<br>';
?>