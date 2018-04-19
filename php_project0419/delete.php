<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>회원 탈퇴</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/delete.css">
</head>
<body>
	<div id="wrap">
		<?php include "header.php";?>		
		<div class="memberDelete">		
			<form action="deleteOk.php" method="post">
				<ul>
					<li><label for="userId">아이디:</label>
						<span class="sessionId"><?=$_SESSION['sessionId']?>님</span>
					  <input type="hidden" name="userId" value="<?=$_SESSION['sessionId']?>"></li>
					<li><label for="userPw">비빌번호 : </label><input type="password" name="userPw" ></li>
					<li><input type="submit" value="회원 탈퇴"></li>
				</ul>			
			</form>
		</div>
		
	</div>

	<script src="js/gnb.js"></script>
	
</body>
</html>