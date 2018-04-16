<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>
</head>
<body>
   <form action="joinOk.php" method="post">
      <label for="userId">Id</label> : <input type="text" name="userId"><br>
      <label for="userPw">PassWord</label> : <input type="password" name="userPw"><br>
      <label for="userGender">성별</label> : <input type="radio" name="userGender" value="M">남자    <input type="radio" name="userGender" value="W">여자<br>
      <label for="userHobbys[]">취미</label> : 
            <input type="checkbox" name="userHobbys[]" value="여행">여행<br>
            <input type="checkbox" name="userHobbys[]" value="운동">운동<br>
            <input type="checkbox" name="userHobbys[]" value="독서">독서<br>
            <input type="checkbox" name="userHobbys[]" value="영화감상">영화감상<br>
            <input type="checkbox" name="userHobbys[]" value="게임">게임<br>
      <label for="userPhone[]">전화번호</label> : <select name="userPhone[]" id="">
         <option value="010" selected>010</option>
         <option value="011" selected>011</option>
         <option value="012" selected>012</option>         
      </select> -
        <input type="text" name="userPhone[]" size="4" maxlength="4"> - <input type="text" name="userPhone[]" size="4" maxlength="4"><br>
        
        <input type="submit" value="회원가입">      
   </form>
    
</body>
</html>