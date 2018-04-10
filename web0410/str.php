<?php
$str="manso 2018 Go";
echo "\$str : ".$str."<br>";
$strLen=strlen($str); //문자열 길이
//영어 1byte , 한글 3byte
echo "\$str의 문자열 길이 : ".$strLen;
echo "<br>";

$str2="대한민국";
echo "\$str의 문자열 길이 : ".strlen($str2);
echo "<br>";
echo gettype(strlen($str2))." <-strlen 의 gettype이다.";
echo "<br>";

//substr(문자열,시작한인덱스,가져올 갯수)
echo $str."의 길이는 ".$strLen."<br>";

$strSub1=substr($str,0,5);
echo "substr(\$str,0,5) 실행결과 -> ".$strSub1."<br>";

$strSub2=substr($str,6,4);
echo "substr(\$str,6,4) 실행결과 -> ".$strSub2."<br>";

$strSub3=substr($str,11,2);
echo "substr(\$str,11,2) 실행결과 -> ".$strSub3."<br>";

?>