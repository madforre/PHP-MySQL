<?php
// 삭제방법 첫번째 시간을 0으로 설정.
setcookie('cookieId');
setcookie('cookiePw');

echo "
    <script>
        alert('로그아웃 성공');
        location.href='index.php';
    </script>
     ";


echo $_COOKIE['cookieId']."<br>";
echo $_COOKIE['cookiePw'];

?>