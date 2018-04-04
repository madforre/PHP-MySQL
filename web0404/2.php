<?php

$num=10;

$num=$num+10;
echo $num."<br>";

$num+=10;
echo $num."<br>";

$num-=10;
echo $num."<br>";

$num*=10;
echo $num."<br>";

$num%=10;
echo $num."<br>";

$num.=10; // "문자열 복합 대입연산자"
echo $num."<br>";


$query="insert into member";

$query=$query."(userId, userPw, userPhone)";
echo $query."<br>";

$query2="insert into member";
$query2.="(userId, userPw, userPhone)";
$query2.="values('manso', '1111', '010-000-0000')";

echo $query2."<br>";