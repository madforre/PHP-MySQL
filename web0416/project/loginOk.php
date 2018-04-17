<?php
include 'db_connect.php';

if(!isset($_POST['userId']) || !isset($_POST['userPw']))
{
    echo "
        <script>
            alert('접속 경로가 잘못되었습니다.');
            location.href='index.php';
        </script>
    ";
    exit;
}

$userId=$_POST['userId'];
$userPw=$_POST['userPw'];


if($userId=="" || $userId==null){
    echo "
        <script>
            alert('아이디를 입력하세요.');
            history.go(-1);
        </script>
    ";
    exit;   
}

if($userPw=="" || $userPw==null){
    echo "
        <script>
            alert('비밀번호를 입력하세요.');
            history.go(-1);
        </script>
    ";
    exit;   
}


$query="SELECT * FROM joinMember WHERE userId='$userId' and userPw='$userPw'";

$result=$conn->query($query); // DB data 가져오는

if($result->num_rows ==0){
    echo "
    <script>
        alert('로그인 실패');
        history.go(-1);
    </script>   
    ";
    exit;
}

@session_start();
$_SESSION['sessionId']=$userId;

    echo "
    <script>
        alert('로그인 성공');
        location.href='index.php';
    </script>   
    ";
    exit;