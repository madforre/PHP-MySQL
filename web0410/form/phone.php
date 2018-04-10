<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
</head>
<body>
   <form action="phoneOk.php" method="post">
      전화번호
      <select name="userPhone[]">
          <option value="010">010</option>
          <option value="011">011</option>
          <option value="012">012</option>
      </select> - <input type="text" name="userPhone[]" size="5" maxlength="4">
      - <input type="text" name="userPhone[]" size="5" maxlength="4"><br>
      취미 :
      <input type="checkbox" name="userHobbys[]" value="등산"> 등산
      <input type="checkbox" name="userHobbys[]" value="독"> 독서
      <input type="checkbox" name="userHobbys[]" value="여행"> 여행
      <input type="checkbox" name="userHobbys[]" value="축구"> 축구
      <input type="checkbox" name="userHobbys[]" value="노래" checked> 노래
      <br><input type="submit" value="보내기">
   </form>
   <br>
      <form action="phoneOk2.php" method="post">
      전화번호
      <select name="userPhone[]">
          <option value="010">010</option>
          <option value="011">011</option>
          <option value="012">012</option>
      </select> - <input type="text" name="userPhone[]" size="5" maxlength="4" value="1514">
      - <input type="text" name="userPhone[]" size="5" maxlength="4" value="1514"><br>
      취미 :
      <input type="checkbox" name="userHobbys[]" value="등산"> 등산
      <input type="checkbox" name="userHobbys[]" value="하산" checked> 독서
      <input type="checkbox" name="userHobbys[]" value="여행" checked> 여행
      <input type="checkbox" name="userHobbys[]" value="축구"> 축구
      <input type="checkbox" name="userHobbys[]" value="노래" checked> 노래
      <br><input type="submit" value="formView.php로 보내기">
   </form>
    
</body>
</html>