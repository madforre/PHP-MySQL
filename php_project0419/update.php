<?php
session_start();
if(!isset($_SESSION['sessionId'])){
	echo "
		<script>
			alert('로그인후 이용하세요, 로그인 페이지로 이동합니다');
			location.href='login.php';
				</script>
	";
	exit;	
}
$userId=$_GET['userId'];
$userPw=$_GET['userPw'];
$userName=$_GET['userName'];
$userYear=$_GET['userYear'];
$userGender=$_GET['userGender'];
$userPhone=$_GET['userPhone'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>회원수정</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/update.css">
</head>
<body>
	
<div id="wrap">
	<?php include "header.php";?>
	<div class="update">
		<h1 class="title">MEMBER MODEFYED</h1>
		<form action="updateOk.php" method="post">
		<div class="contents">
			<ul>
				<li><span><?=$userId?>님 정보</span><input type="hidden" name="userId" maxlength="12" size="12" value="<?=$userId?>" ></li>
				<li><input type="password" name="userPw"  maxlength="16" size="16" value="<?=$userPw?>"></li>
				<li><input type="password" id="pwChecked" maxlength="16" size="16" placeholder="비빌번호 확인"></li>
				<li><input type="text" name="userName"  value="<?=$userName?>"></li>
				<li><input type="text" name="userYear" class='year' value="<?=$userYear;?>" > 
				<?php
					if($userGender=="남자"){
						?>
												
						<input type="radio" name="userGender" value='남자' checked>남자
						<input type="radio" name="userGender" value='여자'>여자
						
						<?php
						
					}else{
						?>
						
						<input type="radio" name="userGender" value='남자' >남자
						<input type="radio" name="userGender" value='여자' checked>여자
						
						<?php
					}
	
				?>
				
				</li>
				<li>
					<select name="userPhone[]" >
						<option value=""selected>통신사선택</option>
						<option value="010" >010</option>
						<option value="011">011</option>
						<option value="012">012</option>
					</select>
					<input type="text" name="userPhone[]" class='phone' placeholder="휴대폰번호" >
					
				</li>
				<li>
					<input type="submit" value="회원수정" name="updateForm">
					
				</li>
			</ul>
		</div>
		</form>
	</div>

</div>	
	
<script src="js/gnb.js"></script>
	
	
	
	
	
	
	
	
</body>
</html>