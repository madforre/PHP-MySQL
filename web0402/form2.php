<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>
</head>
<body>
  <form action="joinOk2.php" method="post">
      아이디 : <input type="text" name="userId" id="userId"><br>
      비밀번호 : <input type="password" name="userPw" id="userPw"><br>
      성별 : <input type="radio" name="userGender" value="male" checked>               </input> 남
            <input type="radio" name="userGender" value="female"> 여<br> 
        <!--성별은 name 동일 value 값 따로 필수! checked도 필수 둘다 없는것 방지! !-->
      취미 : <input type="checkbox" name="userHobbys[]" value="등산">등산
            <input type="checkbox" name="userHobbys[]" value="야구">야구
            <input type="checkbox" name="userHobbys[]" value="여행">여행
            <input type="checkbox" name="userHobbys[]" value="영화감상">영화감상<br>
        <!--      취미는 checkbox name 배열-->
      핸드폰 : <select name="userPhone1">
                 <option value="010">010</option>
                 <option value="011">011</option>
                 <option value="012">012</option>          
              </select>
              - <input type="text" name="userPhone2" size="4" maxlength="4">
              - <input type="text" name="userPhone3" size="4" maxlength="4"><br>
      
    <!--    select로 한다.  핸드폰은 userPhone1 select userPhone2 text userPhone3 text-->
      <input type="submit" value="회원가입">
  </form>
    
</body>
</html>