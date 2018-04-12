<?php if(!isset($_POST['userId'])||!isset($_POST['userId'])){
    echo "
        <script>
            alert('접속정보 오류');
            location.href='login.php';
        </script>
        ";
    exit;

}
$userId=$_POST['userId'];
$userPw=$_POST['userPw'];
         
//공란처리
if($userId=="" || $userId==null){
    echo "
        <script>
            alert('아이디를 확인해주세요.');
            location.href='login.php';
        </script>
        ";
    exit;    
}
if($userPw=="" || $userPw==null){
    echo "
        <script>
            alert('비밀번호를 확인해주세요.');
            location.href='login.php';
        </script>
        ";
    exit;        
}

//입력값 맞는지 manso 1111
if($userId!="manso"){
    echo "
        <script>
            alert('아이디가 없거나 틀립니다.');
            history.go(-1);
        </script>
        ";
    exit;     
}
if($userPw!="1111"){
    echo "
        <script>
            alert('비밀번호가 없거나 틀립니다.');
            history.go(-1);
        </script>
        ";
    exit;     
}

@session_start();
$_SESSION['sessionId']=$userId;
$_SESSION['sessionPw']=$userPw;

   echo "
        <script>
            alert('로그인 성공 index.php로 이동합니다.');
            location.href='index.php';
        </script>
        ";
    exit;