<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>데이터베이스 접속하기</title>
</head>
<body>
<!--    DSN 구성하기. DSN이란 데이터 소스 네임, 데이터 원본 이름을 의미한다.-->
   <?php
    $db_user = "root"; // 사용자명
    $db_pass = "fire0428"; // 패스워드
    $db_host = "localhost"; // 호스트명
    $db_name = "test"; // 데이터베이스명
    $db_type = "mysql"; // 데이터베이스 종류
    $dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";
    
    try{ //접속 처리를 작성합니다.
        $pdo = new PDO($dsn,$db_user,$db_pass); // 데이터베이스에 접속합니다.
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //오류 모드를 설정합니다.
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false); 
        // 프리페어드 스테이트먼트를 이용할 수 있게 합니다. 이용할 수 있도록 에뮬레이터 기능을 FALSE로 하고 있음.
            print "접속하였습니다.";
        }catch(PDOException $Exception){ //예외 클래스를 지정한 뒤 오브젝트를 할당할 변수를 지정합니다.
        die('접속 오류:' .$Exception->getMessage()); // 이 메소드에서 오류 메시지를 가져옵니다.
    }
    
    try{
        $pdo->beginTransaction( );
        $sql = "INSERT INTO member (last_name, first_name, age) VALUES ( :last_name, :first_name, :age)";
//        $sql = SELECT * FROM member;
            $stmh = $pdo->prepare($sql);
            $stmh->bindValue(':last_name', $_POST['last_name'],PDO::PARAM_STR);
            $stmh->bindValue(':first_name', $_POST['first_name'],PDO::PARAM_STR);
            $stmh->bindValue(':age', $_POST['age'],PDO::PARAM_INT);
            $stmh->execute( );
            $pdo->commit( );
            print "데이터를 ".$stmh->rowCount( )."건 입력하였습니다.<br>";
        }catch(PDOException $Exception){
            $pdo->rollBack( ); //원래 상태로 돌아갑니다.
            print "오류:".$Exception->getMessage( );
            }
        
    ?>    
</body>
</html>