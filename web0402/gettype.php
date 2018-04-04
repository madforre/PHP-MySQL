<?php
//변수의 자료형(타입 type)

$a = 10; //정수(integer)
$b = 2.0; //실수(double)
$c = 'A'; // 문자열
$d = "manso"; //문자열
$e = array(1,2,3); // array 객체
$bool = true; // boolean
$strNull = null; //null

// 변수의 타입을 알 수 있는 내장 함수(gettype)
$type = [$a,$b,$c,$d,$e,$bool,$strNull];
echo "<br>변수의 타입을 알 수 있는 내장 함수(gettype)<br><br>";
for($i=0;$i<7;$i++){
    
echo gettype($type[$i])."<br>";
    };

echo "<div class=\"on\">".count($type)."</div>";
// $type의 배열의 갯수 출력

// 타입과 구조까지 가져오려면 var_dump를 쓴다.

echo "<br>변수의 타입 + 구조까지 알 수 있는 내장 함수(var_dump)<br><br>";
for($i=0;$i<7;$i++){
echo var_dump($type[$i])."<br>";
    };

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .on {
            background: #ccc;
            width : 100%;
        }
    </style>
</head>
<body>
    
</body>
</html>