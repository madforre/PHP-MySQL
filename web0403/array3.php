<?php

$arrInt3=[];

$arrInt3[0]=1;
$arrInt3[1]=2;
$arrInt3[2]=3;
$arrInt3[3]=4;
$arrInt3[4]=5;

print_r($arrInt3); echo "<br>"; // 배열의 구조
var_dump($arrInt3); // 변수의 자료형과 값 출력

echo "<br>";
for($i=0;$i<count($arrInt3);$i++){
    echo $arrInt3[$i]."<br>";
}


$members=array(); // 배열 선언

$members[0]="userId";
$members[1]="userPw";
$members[2]="userName";
$members[3]="userGender";
$members[4]="userAddr";

echo "<br>";
for($i=0;$i<count($members);$i++){
    echo $members[$i]."<br>";
}
echo "<br>";

foreach($members as $key){
    echo $key."<br>";
}

echo "<pre>dd";
print_r($members);
echo "</pre>";

$arrMembers['userId']='manso1';
$arrMembers['userPw']='2222';
$arrMembers['userName']='son1';
$arrMembers['userGender']='man';
$arrMembers['userPhone']='010-000-0000';

echo "<pre>";
print_r($arrMembers);
echo "</pre>";

foreach($arrMembers as $key=>$val){
    echo $key."=>".$val."<br>";
}

echo "<br>";

//for($i=0;$i<count($arrMembers);$i++){
//    
//    if($i==0){
//        $key="userId";
//        $val=$key;
//    }else if($i==1){
//        $key="userPw";
//        $val=$key;
//    }else if($i==2){
//        $key="userName";
//        $val=$key;
//    }else if($i==3){
//        $key="userGender";
//        $val=$key;
//    }else if($i==4){
//        $key="userPhone";
//        $val=$key;
//    }
//    echo $val."=>".$arrMembers[$key]."<br> ";
//}
//echo "<br>";
