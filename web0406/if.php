<?php
$userId=$_GET['userId'];
$userPw=$_GET['userPw'];

if($userId!="man" || $userPw!="1234"){
    echo "
        <script>
        alert('회원 정보가 없습니다');
        location.href='login.php';            
        </script>
        ";
    exit;
}else{
    echo "
        <script>
        alert('즐거운 쇼핑 되세요~~');
        location.href='login.php';        
        </script>
        ";
    exit;
}