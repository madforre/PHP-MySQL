<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
</head>
<body>
  
  <?php
    if(!isset($_SESSION['sessionId'])){
        //로그아웃
        echo "<a href=\"join.php\">회원가입</a>
        <a href=\"login.php\">로그인</a>";
        
    }else{
        //로그인
        echo "<a href=\"joinOk.php\">회원수정</a>
        <a href=\"delete.php\">회원탈퇴</a>";
    }
   ?>
   
   
</body>
</html>