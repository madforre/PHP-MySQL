<?php


//잘못된 경로로 접근 방지

//공백 입력 방지

//DB 정보삭제

//session 설정

session_start();
session_destroy(); // 세션 삭제(자동로그아웃) 
// 세션 파괴 안해주면 DB에서는 삭제되었으나 로그인된 상태로 남아있는
// 아이러니한 상태가 될 수 있음

echo "
     <script>
     alert('회원탈퇴 성공');
     location.href='index.php';
     </script>
    ";
exit;