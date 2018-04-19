<?php 
	session_start(); 

 $userId=$_GET['userId'];
 $userPw=$_GET['userPw'];
$userName=$_GET['userName'];
$userGender=$_GET['userGender'];
$userPhone=$_GET['userPhone'];
$userYear=$_GET['userYear'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>회원조회</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/select.css">
</head>
<body>

<div id="wrap">
	<?php include "header.php";?>
	
	<div class="select">
		<ul>
			<li><?=$userId?>님 회원정보</li>
			<li>비빌번호: <?=$userPw?></li>
			<li>이름: <?=$userName?></li>
			<li>성별: <?=$userGender?></li>
			<li>전호번호: <?=$userPhone?></li>
			<li><a href="update.php?userId=<?=$userId?>&userPw=<?=$userPw?>&userName=<?=$userName?>&userYear=<?=$userYear?>&userGender=<?=$userGender?>&userPhone=<?=$userPhone?>">회원수정</a></li>
		</ul>	
	</div>
	
</div>
<script src="js/gnb.js"></script>

</body>
</html>












