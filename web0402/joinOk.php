<?php

$_POST['userId']; 
$_POST['userPw'];
$_POST['userAge'];
$_POST['userPhone'];
$_POST['userAddr'];



if(empty($_POST['userId'])){ //session의 유무를 판단
    echo 
        "
        <script>
            alert('아이디 정보가 없습니다. 되돌아갑니다');
            history.go(-1);
        </script>
        "; 
    exit; // 바로 break;
//    die("종료"); // 메세지를 남기고 break
}

echo "아이디 : ".$_POST['userId']."<br>";
echo "비밀번호 : ".$_POST['userPw']."<br>";
echo "나이 : ".$_POST['userAge']."<br>";
echo "연락처 : ".$_POST['userPhone']."<br>";
echo "주소 : ".$_POST['userAddr']."<br>";