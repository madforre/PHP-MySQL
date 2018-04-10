<?php

// 자료형 변환
// 변수의 타입(자료형)을 변환 cast
$strNum="100";
$intStr=100;
echo gettype($strNum)."<br>";
echo $strNum."<br>";
echo "==================<br>";

echo intval($strNum)."<br>"; // 정수형 변환
echo gettype(intval($strNum))."<br>";
echo "==================<br>";

echo doubleval($strNum)."<br>"; // double
echo gettype(doubleval($strNum))."<br>";
echo "==================<br>";

echo gettype($intStr)."<br>";
echo strval($intStr)."<br>"; // string 형
$str2=strval($intStr);
echo $str2."<br>";
echo gettype(strval($intStr))."<br>";

?>
<?php
$userId="manso1";
echo isset($userId)."<br>"; //$_POST, $_GET

if(!isset($userId)){
    echo "정보가 없습니다<br>";
}else{
    echo "정보가 있습니다<br>";
}
//연결을 끊는다.

$a = 1;
$b = & $a;
unset($a);
echo "<br>";
echo $b;
?>