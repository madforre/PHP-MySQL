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

$query="update joinMember ";
$query.="set userPw='$userPw' , userName='$userName' , userYear='$userYear' , userPhone='$userPhone'  ";
$query.="where  userId='$userId'";

$result=$conn->query($query);// 성공하면 1

if($result==1){
	echo "
	<script>
		alert('회원 수정 성공');
		location.href='index.php';
		</script>
	";
}else{
	echo "
	<script>
		alert('회원 수정 실패 ');
		history.go(-1);
	</script>	
	";	
}	
$conn->close(); // DB연결 해제

?>