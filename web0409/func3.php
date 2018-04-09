<?php

//함수

$num = 0;

function func1(){
    $num=10; // 자바스크립트와는 다르게 php는
            // 함수내에서 초기화를 시켜주어야 한다.
            // 자바스크립트는 함수내에 변수가 없을 경우
            // 전역레벨에서 변수를 찾는다.
    $num++;
    return $num;
}

// return의 반환값은 호출한 그 시점에 반환하고 함수 종료

func1(); // $num값 11이 반환만 된 상태.

echo func1()."<br>"; // 반환한 값을 출력하기

echo "=======func2 시작=======<br>";
$num2 = 10;

function func2(){
    $GLOBALS['num']=$GLOBALS['num2']; //전역변수
    $GLOBALS['num2']++;    
    return "num=".$GLOBALS['num'].", num2=".
        $GLOBALS['num2']."<br>";
}

echo func2();
echo func2();
echo func2();
echo func2();
echo func2();

?>


<!--저장되어 있는 공간, 스택이 다르다-->