<?php
include "dbConnect.php";
// userId, userPw DB에 존재하면 로그인 성공
//접속 오류
if(!isset($_POST['userId']) || !isset($_POST['userPw'])){
	echo "
	<script>
		alert('접속오류');
		location.href='login.php';
	</script>
	";
	exit;
}

$userId=$_POST['userId'];
$userPw=$_POST['userPw'];

if($userId=="" || $userId==null){
		echo "
	<script>
		alert('아이디 다시 입력');
		history.go(-1);
	</script>
	";
	exit;
}
if($userPw=="" || $userPw==null){
		echo "
	<script>
		alert('비빌번호 다시 입력');
		history.go(-1);
	</script>
	";
	exit;
}

$query="select * from joinMember where userId='$userId' and userPw='$userPw' ";

$result=$conn->query($query);
// 결과의 레코드 갯수
if($result->num_rows==0){
	echo "
	<script>
		alert('로그인 실패');
		location.href='join.php';
	</script>
	";
	exit;
}

session_start();// 로그인 성공시 세션를 설정
$_SESSION['sessionId']=$userId;// 아이디 값으로 세션값을 설정

echo "
	<script>
		alert('로그인 성공');
		location.href='index.php';
	</script>
	";

$conn->close(); // DB연결 해제







?>