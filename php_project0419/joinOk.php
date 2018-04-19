<?php
	header("Content-Type:text/html;charset=UTF-8");
?>
<?php
include "dbConnect.php";
// 접속 경로가 확인
if(!isset($_POST['userId']) ||  !isset($_POST['userPw']) || !isset($_POST['userName']) || 
   !isset($_POST['userGender']) || !isset($_POST['userPhone']) || !isset($_POST['userYear'])){
	echo "
		<script>
			alert('접속정보 오류');
			location.href='index.php';
		</script>
	";
	exit;
}

$userId=$_POST['userId'];
$userPw=$_POST['userPw'];
$userName=$_POST['userName'];
$userGender=$_POST['userGender'];
$userYear=$_POST['userYear'];
$userPhone=implode('-',$_POST['userPhone']);// 배열을 >> 문자열

// 공백 처리
if($userId==""  || $userId==null){
	echo "
		<script>
			alert('아이디를 다시 입력해주세요');
			history.go(-1);
		</script>
	";
	exit;
}
if($userPw==""  || $userPw==null){
	echo "
		<script>
			alert('비빌번호를 다시 입력해주세요');
			history.go(-1);
		</script>
	";
	exit;
}
if($userName==""  || $userName==null){
	echo "
		<script>
			alert('이름를 다시 입력해주세요');
			history.go(-1);
		</script>
	";
	exit;
}	
	
$query="insert into joinMember(userId,userPw,userName,userYear,userGender,userPhone)  values('$userId','$userPw','$userName','$userYear','$userGender','$userPhone') ";
	
$result=$conn->query($query);// 쿼리문을 실행... 성공 1반환

if($result==1){
	echo "
	<script>
		alert('회원 가입 성공');
		location.href='login.php';
		</script>
	";
}else{
	echo "
	<script>
		alert('회원 실패 ');
		history.go(-1);
	</script>	
	";	
}	
$conn->close(); // DB연결 해제
?>


