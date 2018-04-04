<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <form action="joinOk.php" method="get" name="joinOkForm">
        
         <input type="text" name="userId"><br>
         <input type="password" name="userPw"><br>
         <input type="text" name="userAge"><br>
         <select name="userPhone1">
            <option value="010" selected>010</option>
            <option value="011">011</option>
            <option value="012">012</option>             
         </select>
         - <input type="text" name="userPhone2"  size="4" maxlength="4">
         - <input type="text" name="userPhone3"  size="4" maxlength="4"><br>
         <input type="checkbox" name="userHobbys[]" value="등산" checked>배구
         <input type="checkbox" name="userHobbys[]" value="축구">축구
         <input type="checkbox" name="userHobbys[]" value="야구">야구
         <input type="checkbox" name="userHobbys[]" value="피구">피구
         <input type="checkbox" name="userHobbys[]" value="족구">족구<br>
         
<!--         <input type="submit" value="회원가입">-->
        <input type="button" value="회원가입" id="joinOk">                                   
        
   </form>
   <script>                 
       
       var joinOkForm=document.getElementsByName('joinOkForm')[0];
       var joinOk=document.getElementById('joinOk');
       
       var userId=joinOkForm.userId;
       var userPw=joinOkForm.userPw;
       var userAge=joinOkForm.userAge;
       var userPhone1=joinOkForm.userPhone1;
       var userPhone2=joinOkForm.userPhone2;
       var userPhone3=joinOkForm.userPhone3;
       
       joinOk.addEventListener('click',joinOkFunc);
       
       function joinOkFunc(e){
           
           if(userId.value == "" || userId.value ==null){
               alert("아이디 입력 오류");
               userId.focus();
               return;
           }
           if(userPw.value == "" || userPw.value ==null){
               alert("비밀번호 입력 오류");
               userPw.focus();
               return;
           }
           if(userAge.value == "" || userAge.value ==null){
               alert("나이 입력 오류");
               userAge.focus();
               return;
           }
           if(userPhone1.value == "" || userPhone1.value ==null){
               alert("첫번째 전화번호 입력 오류");
               userPhone1.focus();
               return;
           }
           if(userPhone2.value == "" || userPhone2.value ==null){
               alert("두번째 입력 오류");
               userPhone2.focus();
               return;
           }
           if(userPhone3.value == "" || userPhone3.value ==null){
               alert("세번째 입력 오류");
               userPhone3.focus();
               return;
           }

//           joinOkForm.submit();
           var change = document.getElementById("joinOk");
           change.setAttribute("type","submit");
       }
     
    </script>
    
</body>
</html>