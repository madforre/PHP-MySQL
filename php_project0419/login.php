<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>로그인</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/header.css">
</head>
<body>
   <?php include "header.php";?>
	<div class="login">
		<h1>LOGIN</h1>
		<div class="loginForm">
			<div class="loginHeader">
				<ul>
					<li class="on">회원로그인</li>
					<li>비회원(주문조회)</li>
				</ul>
			</div>
			<div class="loginContent">				
				<form action="loginOk.php" method="post">
					<ul>
						<li><input type="text" name="userId"  id="userId" placeholder="아이디" ></li>
						<li><input type="password" name="userPw" placeholder="비빌번호" id="userPw"></li>
						<li><input type="submit" value="로그인" id="loginSumbit" ></li>
					</ul>
				</form>					
			</div>
			<div class="loginFooter">
				<ul>
					<li><a href="join.php">회원가입</a></li>
					<li><a href="idSerach.php">아이디찾기</a></li>
					<li><a href="pwSerach.php">비빌번호찾기</a></li>
				</ul>
			</div>
		</div>		
	</div>
	<script src="js/gnb.js"></script>
	<script src="js/login.js"></script>		
</body>
</html>
