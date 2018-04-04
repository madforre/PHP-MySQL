<?php
if(!isset($_POST['userId'])|| !isset($_POST['userPw'])){
    
    echo " 
        <script>
            alert('로그인 정보 오류');
            location.href=\"login.php\";
        </script>   
    "; 
    exit;
}

$userId=$_POST['userId'];
$userPw=$_POST['userPw'];

if($userId=="" || $userId==null){
    
    echo "
        <script>
            alert('아이디 입력 오류');
            history.go(-1);
        </script>
        ";
    exit;
}

if($userPw=="" || $userPw==null){
    
    echo "
        <script>
            alert('비밀번호 입력 오류');
            location.href='login.php';
        </script>
        ";
    exit;
}

if($userId != "so" || $userPw != "1111"){
    
    echo"
        <script>
            alert('아이디나 비밀번호가 일치하지 않습니다.');
            history.go(-1);

        </script>
        ";
        exit;
}

echo " 
        <script>
            alert('회원님 즐거운 쇼핑되세요^^');
            location.href='main.php?userId=".$userId."';
        </script>
";
   exit;

?>