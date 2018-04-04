<?php

$userHobbys = $_POST['userHobbys'];
$userPhone1 = $_POST['userPhone1'];
$userPhone2 = $_POST['userPhone2'];
$userPhone3 = $_POST['userPhone3'];

echo "userHobbys의 gettype : ".gettype($userHobbys)."<br>";

echo "아이디 : ".$_POST['userId']."<br>";
echo "비밀번호 : ".$_POST['userPw']."<br>";
echo "성별 : ".$_POST['userGender']."<br>";

// PHP에 내장된 함수 implode 를 사용하여 배열 풀기 

echo "취미 (implode(\"구분자\",변수) PHP 내장함수 사용) : ".implode(",",$userHobbys)."<br>";
echo "취미 (foreach 문 사용) : ";

// foreach 로 배열 풀기

foreach($userHobbys as $index){
    echo $index." ";
};

echo "<br>취미 (for 문 사용) : ";

// for 문으로 배열 풀기

for($i=0;$i<count($userHobbys);$i++){
    echo $userHobbys[$i]." ";
}

echo "<br>연락처 : ".$userPhone1." - ".$userPhone2." - ".$userPhone3;