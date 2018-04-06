<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
</head>
<body>
   <form action="loginOk.php" method="post">
      <label for="userId">ID : </label>
      <input type="text" name="userId"><br>
      <label for="userPw">PW : </label>
      <input type="password" name="userPw"><br>
      <input type="submit" value="로그인">       
   </form>
   
    <form action="if.php" method="get">
      <label for="userId">ID : </label>
      <input type="text" name="userId"><br>
      <label for="userPw">PW : </label>
      <input type="password" name="userPw"><br>
      <input type="submit" value="로그인">       
   </form>
    
</body>
</html>