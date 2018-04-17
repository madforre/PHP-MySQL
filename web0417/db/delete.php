<?php
include "dbConnect.php";

$userId='ooo1';

$query="DELETE FROM memberjoin WHERE userID=$userId";

$result=$conn->query($query); // DB의 data를 get

if($result==1){
    
    //세션 삭제
    session_start();
    session_destroy();
    echo "
        <script>
            alert('회원 탈퇴 성공');
            location.href='index.php';
        </script>   
        ";
}else{
    echo "
        <script>
            alert('회원 탈퇴 실패');
            location.href='index.php';
        </script>   
        ";  
    
}

$conn->close();