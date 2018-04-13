<?php
session_start();
if(!isset($_SESSION['sessionId'])){
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
</head>
<body>
   <form action="deleteOk.php" method="post">
      <input type="hidden" name="userId" value='<?=$_SESSION['sessionId']?>'>
      비밀번호 입력 : <input type="password" name="userPw">
      <input type="submit" value="회원탈퇴">       
       
   </form>
    
</body>
</html>