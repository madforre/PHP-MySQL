<?php

$num = 15;

// 2진수 : binary number
// 8진수 : octal number
// 10진수 : decimal number 
// 16진수 : hexadecimal


//sprintf(표시될 문자열, 값)

echo sprintf('num=%b',$num)."<br>"; //2진수
echo sprintf('num=%o',$num)."<br>"; //8진수
echo sprintf('num=%d',$num)."<br>"; //10진수
echo sprintf('num=%x',$num);        //16진수
echo nl2br("

");

// printf 반환한 값이 바로 화면에 찍힘

echo printf('num=%b',$num)."<br>"; //2진수
printf('num=%o',$num)."<br>"; //8진수
printf('num=%d',$num)."<br>"; //10진수
printf('num=%x',$num);        //16진수

// echo를 사용하는 것이 더 좋습니다. 
// 왜냐하면 속도 면에서 미미하게 echo가 print보다 더 빠르다고 하네요.
// echo와 print는 실제 함수가 아니라 언어 구조라고 합니다. 그런데 print는 함수처럼 사용할 수 있습니다.

//PHP에서 일반적으로 자주 쓰이는 출력문 중에서는 print, printf, sprintf가 있습니다.
//
//이 세가지 함수는 동일한 출력 역할을 하지만 서로 다른 출력 방법을 지원합니다.
// 
//먼저 print는 문자열을 출력해주는 역할을 합니다.
//    
//printf는 정해진 포맷에 맞추어 출력을 해주는 역할을 합니다.
//
//마지막으로 sprintf는 별도의 출력을 하지 않고 특정 변수로 값을 저장하거나 리턴하는 역할을 합니다.
    


    
    