<?php
include "dbConnect.php";
//접속 오류
if(!isset($_POST['userId']) || !isset($_POST['userPw'])){
	echo"
		<script>
			alert('접속 경로 오류');
			location.href='index.php';
		</script>
	";
	exit;
}

$userId=$_POST['userId'];// session값으로 설정
$userPw=$_POST['userPw'];
//공백
if($userPw=="" || $userPw==null){
		echo"
		<script>
			alert('비빌번호 다시 입력해주세요');
			history.go(-1);
		</script>
	";
	exit;
}
//DB연동
$query="delete from joinMember where userId='$userId'  and userPw='$userPw'";
$num=$conn->query($query);//성공하면 1값을 반환

if($num==1){//회원 탈퇴 성공
	session_start();
	session_destroy();//세션을 삭제
	echo"
		<script>
			alert('회원 탈퇴 성공');
			location.href='index.php';
		</script>
	";
}else{
	echo"
		<script>
			alert('회원 탈퇴 실패');
			history.go(-1);
		</script>
	";
}

$conn->close();

?>