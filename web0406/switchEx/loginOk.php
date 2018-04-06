<?php
$userId=$_POST['userId'];
$userPw=$_POST['userPw'];
$Rank=$_POST['Rank'];

if($userId!="manso" || $userPw!="1111"){
    echo "
        <script>
            alert('회원 정보가 틀립니다');
            history.go(-1);
        </script>   
    ";
    exit;
}

switch($Rank){
    case '1':
        echo "<script>
                alert('관리자 페이지로 이동합니다');
                location.href='admin.php?userId=$userId';
              </script>";
        break;
    case '2':
        echo "<script>
                alert('일반 페이지로 이동합니다');
                location.href='middle.php?userId=$userId';
              </script>";
        break;
    case '3':
        echo "<script>
                alert('학생 페이지로 이동합니다');
                location.href='student.php?userId=$userId';
              </script>";
        break;
    default:
        echo "<script>
                alert('결과값이 없습니다. 다시 입력해주세요.');
                history.go(-1);
              </script>";
        break;
}