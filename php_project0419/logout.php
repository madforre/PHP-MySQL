<?php
// 로그아웃
session_start();
session_destroy();// 모든 세션을 삭제

echo "
	<script>
		alert('로그아웃 성공');
		location.href='index.php';
	</script>
";
exit;
?>