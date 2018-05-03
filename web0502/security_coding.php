<?php

    $tableName = "member";

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
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false); // 프리페어드 스테이트먼트를 이용할 수 있도록
        // 에뮬레이터 기능을 FALSE로 하였다.
            print "접속하였습니다.";
    }catch(PDOException $Exception){
        die('접속 오류:'.$Exception->getMessage( ));
    }

    try{
        
        $pdo->beginTransaction( );
        $sql = "INSERT INTO $tableName (last_name, first_name, age) VALUES ( :last_name, :first_name, :age)";
        $stmh = $pdo->prepare($sql);
    
        // bindValue 메소드의 세 번째 인수에는 데이터형을 써줍니다.
        // 바인드하는 값이 문자열인지 수치인지를 명시하여 SQL 인젝션 공격에 대한 안정성을 높이고 있습니다.
    
        $stmh->bindValue(':last_name', $_POST['last_name'],PDO::PARAM_STR); // SQL의 CHAR형,
                                                                    // VARCHAR형 등의 문자열형을 나타냅니다.
        $stmh->bindValue(':first_name', $_POST['first_name'],PDO::PARAM_STR); // 문자열 형을 나타냅니다.
        $stmh->bindValue(':age', $_POST['age'],PDO::PARAM_INT); // SQL의 INTEGER형을 나타냅니다.
        
        // 그 외 정의된 상수
        // PDO::PARAM_BOOL는 불리언 값(Boolean value)을 나타냅니다.
        // PDO::PARAM_NULL는 SQL의 NULL을 나타냅니다.
        
        $stmh->execute( );   
        $pdo->commit( ); // SQL을 실행한 후에 commit 메소드로 처리를 확정합니다. commit은 변경을 확정하는 메소드입니다.
        print "데이터를 ".$stmh->rowCount( )."건 입력하였습니다.<br>"; // rowCount 는 스테이트먼트 핸들러 입니다.
        // SQL문을 실행하고 검색 결과나 수정/삭제된 행 수를 돌려줍니다.
        
    }catch(PDOException $Exception){
        
        $pdo->rollBack( ); // 트랜잭션을 롤백합니다. 원래 상태로 돌아갑니다.
        print "오류:".$Exception->getMessage( );
            
    }
?>