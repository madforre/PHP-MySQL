<?php
//SESSION 설정
session_start();
session_destroy(); // 세션 삭제 ( 자동로그아웃 )

echo "
    <script>
    alert('로그아웃 성공');
    location.href='index.php';
    </script>
    ";
exit;
?>