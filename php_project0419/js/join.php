<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>회원가입</title>
</head>
<body>	
	<form action="joinOk.php" method="post" name="joinForm">
		id : <input type="text" name="userId"><br>
		pw : <input type="password" name="userPw"><br>
		취미 :
		 <input type="checkbox" name="userHobbys[]" value="등산" checked>등산
		 <input type="checkbox" name="userHobbys[]" value="여헹">여헹
		 <input type="checkbox" name="userHobbys[]" value="독서">독서
		 <input type="checkbox" name="userHobbys[]" value="영화감삼">영화감삼
		 <input type="checkbox" name="userHobbys[]" value="축구">축구<br>
		 전화번호:
		 <select name="userPhone[]" id="phone1">
		 	<option value="010" selected>010</option>
		 	<option value="012">012</option>
		 	<option value="013" >013</option>
		 </select>
		 - <input type="text" name="userPhone[]" id="phone2">
		 - <input type="text" name="userPhone[]" id="phone3"><br>
		 <input type="button" value="회원가입" id="submitBtn"> 
	</form>
	<script>
		var joinForm=document.getElementsByName('joinForm')[0];
		var userId=joinForm.userId;
		var userPw=joinForm.userPw;
		var phone2=joinForm.phone2;
		var phone3=joinForm.phone3;
		
		var submitBtn=document.getElementById('submitBtn');
		submitBtn.addEventListener('click',submitFunc);
		
		function submitFunc(e){
			
			if(userId.value=="" || userId.value==null){
				alert('아이디를 입력해주세요');
				userId.focus();
				return;
			}
			
			if(userPw.value=="" || userPw.value==null){
				alert('비빌번호를 입력해주세요');
				userPw.focus();
				return;
			}
			
			if(phone2.value=="" || phone2.value==null){
				alert('전화번호를 입력해주세요');
				phone2.focus();
				return;
			}
			
			if(phone3.value=="" || phone3.value==null){
				alert('전화번호를 입력해주세요');
				phone3.focus();
				return;
			}
			
			joinForm.submit();
			
		}
		
		
	
	</script>
	
	
</body>
</html>