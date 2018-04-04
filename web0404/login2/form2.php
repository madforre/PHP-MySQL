<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>
</head>
<body>
   
    <form action="joinOk2.php" method="post" name="joinForm">
       아이디 : <input type="text" name="userId"><br>
       비밀번호 : <input type="password" name="userPw"><br>
       취미 :
       <input type="checkbox" name="userHobbys[]" value="산책">산책
       <input type="checkbox" name="userHobbys[]" value="조깅">조깅
       <input type="checkbox" name="userHobbys[]" value="걷기">걷기
       <input type="checkbox" name="userHobbys[]" value="빨리걷기">빨리걷기
       <input type="checkbox" name="userHobbys[]" value="뛰기">뛰기<br>
       전화번호 :
       <select name="userPhone[]" id="phone1">
          <option value="010" selected>010</option>
          <option value="011">011</option>
          <option value="012">012</option>          
       </select>
       - <input type="text" name="userPhone[]" id="phone2" size="4" maxlength="4">
       - <input type="text" name="userPhone[]" id="phone3" size="4" maxlength="4"><br>
       <input type="button" value="회원가입" id="submitBtn">          
    </form>
    <script>
        
        var joinForm = document.getElementsByName('joinForm')[0];
        var userId = joinForm.userId;
        var userPw = joinForm.userPw;
        var phone2 = joinForm.phone2;
        var phone3 = joinForm.phone3;
        
        var submitBtn = document.getElementById('submitBtn');
        submitBtn.addEventListener('click',function(){
            
            if(userId.value=="" || userId.value==null){
                alert('아이디를 입력하세요.');
                userId.focus();
                       
            }
            
            if(userPw.value=="" || userPw.value==null){
                alert("비밀번호를 입력하세요.");
                userPw.focus();
                return;               
            }
            
            if(phone2.value=="" || phone2.value==null){
                alert("전화번호를 입력하세요.");
                phone2.focus();
                return;               
            }
            
            if(phone3.value=="" || phone3.value==null){
                alert("전화번호를 입력하세요.");
                phone3.focus();
                return;               
            }
//            joinForm.submit();
            submitBtn.setAttribute('type','submit');
            
            
        })
    </script>
    
</body>
</html>