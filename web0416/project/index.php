<?php
@session_start();
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
      echo " <a href=\"login.php\">로그인</a>";
      echo " <a href=\"join.php\">회원가입</a>";
    }else{
      echo $_SESSION['sessionId']."님 환영합니다.";
      echo " <a href=\"logout.php\">로그아웃</a>";        
    }    
    ?>
   <a href="delete.php">회원탈퇴</a>
</body>
</html>