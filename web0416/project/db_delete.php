<?php
header("Content-Type: text/html; charset=UTF-8");
?>
<?php
include('db_connect.php');

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

$sql1="SELECT userId FROM joinmember WHERE userId='$userId'";
$sql2="SELECT userPw FROM joinmember WHERE userId='$userId'";

$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

if($result1->fetch_row()[0]==$userId){    
    if($result2->fetch_row()[0]==$userPw){
        
        // DB delete

        $sql3="DELETE FROM joinmember WHERE userId='$userId'";

        $result=$conn->query($sql3);

        echo "
        <script>
            alert('$userId 님 회원탈퇴 성공! 그동안 감사드립니다.');
            location.href='index.php';
        </script>
        ";

    session_start();
    session_destroy();

    $conn->close();

    }else{
    echo "
        <script>
            alert('비밀번호가 일치하지 않습니다.');
            history.go(-1);
        </script>
    ";
    exit;   
        
    }
}else{
    echo "
        <script>
            alert('회원이 아닙니다.');
            history.go(-1);
        </script>
    ";
    exit;   
}
?>