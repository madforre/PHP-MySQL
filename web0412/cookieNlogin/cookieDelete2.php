<?php

setcookie('userId');

echo "<script>
        alert('쿠키가 초기화 되었습니다. visited.php 로 이동합니다^_^');
        location.href='visited.php'
      </script>
    ";
?>