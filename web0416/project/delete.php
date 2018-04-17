<?php
@session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원탈퇴</title>
</head>
<body>
   <form action="db_delete.php" method="post">
      <label for="userId">Id</label> : <?=$_SESSION['sessionId']?><input type="hidden" name="userId"
      value="<?=$_SESSION['sessionId']?>"<br>
      <label for="userPw">Password</label> : <input type="password" name="userPw"><br>
      <input type="submit" value="회원탈퇴">
   </form>
    
</body>
</html>