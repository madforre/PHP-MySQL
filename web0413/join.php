<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <form action="joinOk.php" method="POST">
   <label for="userId">ID : </label><input type="text" name="userId">
   <label for="userPw">PW : </label><input type="password" name="userPw"><br>
   <label for="userGender">성별 : </label> 남 <input type="radio" name="userGender" value="M" checked>
     여 <input type="radio" name="userGender" value="W" checked><br>
      <label for="userPhone[]"> 핸드폰 : </label><select name="userPhone[]">
          <option value="010">010</option>
          <option value="011">011</option>
          <option value="012">012</option>
      </select> - <input type="text" name="userPhone[]" size="5" maxlength="4">
      - <input type="text" name="userPhone[]" size="5" maxlength="4"><br>
      <label for="userHobbys[]"> 취미 : </label>
      <input type="checkbox" name="userHobbys[]" value="등산"> 등산
      <input type="checkbox" name="userHobbys[]" value="독"> 독서
      <input type="checkbox" name="userHobbys[]" value="여행"> 여행
      <input type="checkbox" name="userHobbys[]" value="축구"> 축구
      <input type="checkbox" name="userHobbys[]" value="노래" checked> 노래
      <input type="submit" value="제출">
      </form>
    
</body>
</html>