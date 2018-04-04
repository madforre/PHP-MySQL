<?php

// 논리연산자 && ||

$userId="manso";
$userPw="1111";

echo $userId=="manso";
echo "<br>";

echo $userPw=="1111";
echo "<br>이밑으로 논리연산자<br> " ;


echo $userId=="manso" && $userPw=="1111";
echo "<br>";
echo $userId=="manso1" && $userPw=="1111";
    
    
    
?>


조건 1 && 조건2 결과
true     true   true


조건1 || 조건2 결과
false   false  false