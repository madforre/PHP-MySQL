<?php
$hostName='localhost';// 계정
$dbId='root';//계정 아이디
$dbPw='apmsetup';//계정 비빌번호
$dbName='OneQ';//DB명

$conn=new mysqli($hostName,$dbId,$dbPw,$dbName);

$conn->query("SET NAMES utf8");//한글 깨짐 

if($conn->connect_error){
	echo " 
	<script>
		alert('접속 오류');
		location.href='index.php';
	</script>";
	exit;
}



?>