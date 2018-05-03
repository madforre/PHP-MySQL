<?php
 // 데이터를 작업할 PHP 파일과 유지보수에 편리한 데이터베이스를 수정할 PHP 파일이 필요하다.

 // 같은 접속 처리를 2개의 파일로 기술하는 것보다는 함수나 클래스로서 하나의 파일에 합쳐 두는 것이 편리합니다.

        $tableName = "member"; // 테이블 네임

    function db_connect( ){ // 필수 db_connect를 정의하였다.

        
        
        $db_user = "root"; // 사용자명
        $db_pass = "fire0428"; // 패스워드
        $db_host = "localhost"; // 호스트명
        $db_name = "php_ajax"; // 데이터베이스명
        $db_type = "mysql"; // 데이터베이스 종류
        $dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";

        try{
            $pdo = new PDO($dsn,$db_user,$db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        }catch(PDOException $Exception){
            die('오류: ' .$Exception->getMessage( ));
        }
        return $pdo; // 데이터 베이스 핸들러를 돌려줍니다.
        
        // return 없이 $pdo의 값을 불러올 수 있을까요? 불가능합니다. 그 이유는 앞에도 말한것처럼 $pdo가 함수내에서 실행된 지역변수이기 때문

    }
?>