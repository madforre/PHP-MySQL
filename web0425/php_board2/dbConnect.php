<?php
$hostName="localhost";
$hostId="madforre";
$hostPw="fire0428";
$dbName="madforre";

$conn=new mysqli($hostName,$hostId,$hostPw,$dbName);
$conn->query('SET NAMES UTF8');// 한글 처리

if($conn->connect_error){
	echo "
		<script>
		alert('DB연결 오류');
		location.href='index.php';
		</script>
	";
	exit;
}
//echo "연결 성공";

?>