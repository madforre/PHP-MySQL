    <?php

    $db_user = "root"; // 사용자명
    $db_pass = "fire0428"; // 패스워드
    $db_host = "localhost"; // 호스트명
    $db_name = "php_ajax"; // 데이터베이스명
    $db_type = "mysql"; // 데이터베이스 종류
    $dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";

    // 사용자명을 잘못 입력하면 오류가 발생한다.
    try{
        $pdo = new PDO($dsn,$db_user,$db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // 오류 모드를 설정하였다.
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false); // 프레피어드 스테이트먼트를 이용할 수 있도록
        // 에뮬레이터 기능을 FALSE로 하였다.
            print "접속하였습니다.";
    }catch(PDOException $Exception){
        die('접속 오류:'.$Exception->getMessage( ));
    }

    ?>
