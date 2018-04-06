<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
</head>
<body>
   <form action="loginOk.php" method="post">
      <label for="">id : </label><input type="text" name="userId"><br>
      <label for="pw">pw : </label><input type="text" name="userPw"><br>
      <label for="Rank">Rank : </label>
          <select name="Rank">
             <option value="1">원장</option>
             <option value="2">강사</option>     
             <option value="3">학생</option>
          </select>
          
      <input type="submit" value="로그인">       
       
   </form>
    
</body>
</html>