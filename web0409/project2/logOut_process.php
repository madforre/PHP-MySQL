<?php


 @session_start(); // @ <-- 오류로 인해 프로그램이 종료되는 것을 방지   
//    unset($_SESSION["sessionId"]); // 

        // 때로는 전체 세션을 파괴하는 것보다 몇 가지 세션 변수를 해제해야 할 수도 있습니다. 
        // 그래서 그 당시 unset ()이 필요할 수 있습니다.
        // 세션 슈퍼 전역변수 자체는 남지만 그 안에 담긴 값은 초기화되는 것. 
        // 어떻게 보면 특정 세션 삭제라고 볼 수 있다.)
        // unset 함수 자체는 PHP에서 전달 된 변수를 설정 해제하는 모든 변수에 대한 것임을 
        // 분명히 해야한다.
        // 세션이 여러개 일때 나머지는 살리고 특정 세션들만 지목해서 삭제해줄 때 사용한다.
        

//    $_SESSION = array(); // 전체 세션변수 삭제.
        // 여러개의 세션변수들은 배열형태이기 때문에 빈배열로 세션변수 전체를 초기화 시켜줄 수 있다.
        // 세션 슈퍼 전역 변수 자체는 남지만 값이 초기화 되는 것.
        // $_SESSION 은 php가 원래부터 제공하는 슈퍼 전역 변수이므로 
        // 빈 배열 선언은 삭제라고 봐도 된다.
        // 특정 배열형태의 세션변수 초기화, 즉 세션 값 삭제라고 볼 수 있다.


//    bool session_destory ( void )
//        // 세션에 등록되는 모든 데이터 파괴.
//        // 파괴 성공시 true, 실패시 false 를 반환
//        // 세션을 파괴하는 경우 session_start() 함수가 호출되어야 함
//        
    session_destroy();
              // 브라우저에 남아있는 모든 세션 모조리 삭제
//            // 세션변수뿐만 아니라 서버에 저장된 데이터까지 제거하는 경우 사용한다.
              // 일반적으로 권장.
//    
    echo "<script>
        alert('로그아웃에 성공하였습니다. logOut.php 페이지로 이동합니다.');
        location.href='logOut.php';
        </script>";
    exit;