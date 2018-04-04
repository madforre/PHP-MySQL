<?php

$members2=array('userId'=>'manso1','userPw'=>'1111','userGender'=>'남자');
echo "<pre>";
print_r($members2);
echo "</pre>";
echo "\$members2 의 배열의 길이 : ".count($members2)."개<br>";

foreach($members2 as $val){
    echo $val."<br>";
}

foreach($members2 as $key=>$val){
    echo $key."=>".$val."<br>";
}