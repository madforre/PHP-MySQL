<?php
//계산기
// 기호를 입력, 두 숫자를 입력해서 기호에 맞는 연산을
//    수행하는 함수

function calculator($operator,$num1,$num2){
    switch($operator){
        case '+';
            echo $num1."+".$num2."=".($num1+$num2)."<br>";
            break;
        case '-';
            echo $num1."-".$num2."=".($num1-$num2)."<br>";
            break;
        case '*';
            echo $num1."*".$num2."=".($num1*$num2)."<br>";
            break;
        case '/';
            echo $num1."/".$num2."=".($num1/$num2)."
            <br>";
            break;
    };
    
};

calculator('+',100,200);
calculator('-',100,200);
calculator('*',100,200);
calculator('/',100,200);