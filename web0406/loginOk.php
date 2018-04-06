<?php

$userId =$_POST['userId'];
$userPw = $_POST['userPw'];

if(!isset($userId) || !isset ($userPw)){
  
//    die
//            history.go(-1);보다는 아예 로그인 페이지로 보내는 것이 낫다.
    echo
        "<script>
            alert('잘못된 접근입니다.');
            location.href='login.php';

         </script>";
    exit;

    };


if($userId=="" || $userId==null){
    echo "
        <script>
            alert('아이디가 공란 입니다');
            history.go(-1);
        </script>
    ";
    exit;
}

if($userPw=="" || $userPw==null){
    echo "
        <script>
            alert('비밀번호가 공란 입니다');
            history.go(-1);
        </script>
    ";
    exit;
}

if($userId!= "dbsearch"){
    echo "
            <script>
                alert('아이디가 없습니다. 다시 입력해주세요');
                history.go(-1);
            </script>
    ";
    exit;
}

if($userPw!="1111"){
    echo "
        <script>
            alert('비밀번호가 일치하지 않습니다. 다시 입력해주세요');
            history.go(-1);
        </script>
    ";
    exit;
}

echo "
        <script>
            alert('로그인 성공,메인페이지로 이동합니다');
            location.href='main.php?userId=$userId';
        </script>
        ";
?>