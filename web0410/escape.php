<?php

//문자열 함수 이스케이프
$str = "manso '2018' "; // db로 들어갈때 작은따옴표는 안보이게 들어감.
echo $str."<br>";

echo addslashes($str)."<br>"; // 자동으로 이스케이프 추가해주는 함수


// addslashes() 미리선언된 아래 4개의 유형을 자동으로 이스케이프 추가해주는 함수
    // single quote (')
    // double quote (")
    // backslash (\)
    // NULL

$strJSON="{'userId':'manso1','userPw':'1111','userName':'son1'}";
var_dump($strJSON);
echo $strJSON."<br>";

echo addslashes($strJSON)."<br>";
echo "===================================================<br>";

echo stripslashes(addslashes($strJSON)); // 이스케이프를 벗겨줌.
        // stripslashes() 추가했던 백슬래쉬를 제거해주는 함수이다.