<?php
if(!isset($_POST['userId']) || !isset($_POST['userPw']) || !isset($_POST['userHobbys']) || !isset($_POST['userPhone'])){
	echo "
		<script>
			alert('접속 경로 오류! index페이지로 이동합니다');
			location.href='index.php';
		</script>
	";
	exit;
}

$userId=$_POST['userId'];
$userPw=$_POST['userPw'];
$userHobbys=implode(',',$_POST['userHobbys']);
$userPhone=implode('-',$_POST['userPhone']);

echo $userId."<br>";
echo $userPw."<br>";
echo $userHobbys."<br>";
echo $userPhone."<br>";


// 나머지는 DB로 처리

// DB 처리후 회원가입 성공, 실패여부 판

echo "
		<script>
			alert('회원가입 성공');
			location.href='login.php';
        
		</script>
";

?>

