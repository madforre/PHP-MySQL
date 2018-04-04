<?php

if(!isset(joinOkForm)){
    echo "
        <script>
            alert('회원가입 폼이 아닙니다. 잘못된 접근입니다.');
            history.go(-1);
        </script>
    ";
    exit;
};

$userId = $_GET['userId'];
$userPw = $_GET['userPw'];
$userAge = $_GET['userAge'];
$userPhone1 = $_GET['userPhone1'];
$userPhone2 = $_GET['userPhone2'];
$userPhone3 = $_GET['userPhone3'];
$userHobbys = $_GET['userHobbys'];

$userPhone=$userPhone1."-".$userPhone2."-".$userPhone3;

echo $userId."<br>";
echo $userPw."<br>";
echo $userAge."<br>";
echo $userPhone."<br>";
echo implode(',',$userHobbys);

$userHobby = implode(',',$userHobbys)."<br>";

echo "<pre>";
print_r(explode('-',$userPhone));
echo "</pre>";

$members=array('userId'=>$userId,
                 'userPw'=>$userPw,
                 'userAge'=>$userAge,
                 'uerPhone'=>$userPhone,
                 'userHobby'=>$userHobby
                );

foreach($members as $key=>$val){
    echo $key." : ".$val."<br>";
}
?>