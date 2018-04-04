<?php
//연관배열
$members=array(
                    'userId'=>'hee',
    'userPw' => '1111',
    'userName' => 'gun',
    'userPhone' => '010-000-0000'
    );
echo "<pre>";
echo print_r($members);
echo "</pre>";
                
foreach($members as $key=>$val){
    echo $key."=>".$val."<br>";
}

echo "===================<br>";

$arrInt = array(0=>1, 1=>2, 2=>3, 3=>4, 4=>5);
echo "<pre>";
echo print_r($arrInt);
echo "<pre>";
foreach($arrInt as $key=>$val){
    echo $key."=>".$val."<br>";
}
?>