<?php
//다차원배열

$members[0]=array('userId'=>'manso1','userPw'=>'1111','userAge'=>10);
$members[1]=array('userId'=>'manso2','userPw'=>'2222','userAge'=>20);
$members[2]=array('userId'=>'manso3','userPw'=>'3333','userAge'=>30);

echo "<pre>";
print_r($members);
echo "</pre>";

//echo $members[0]; //에러난다. 0번지안에 들어있는게 배열이기 때문에 문자열이 아니므로 출력이 안됨.

foreach($members as $key){
    
    var_dump($key);
    
    foreach($key as $key2=>$val){
    echo $key2,"=>".$val."<br>";
    }
    echo "<br>";
    
}

