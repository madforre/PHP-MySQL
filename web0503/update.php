<?php
    @session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP 테스트</title>
</head>
<body>
   <?php
    require_once("MYDB.php");
    $pdo = db_connect();
    // 세션 변수를 받습니다.
    $id = $_SESSION['id']; // 세션 변수에서 $id에 데이터를 할당합니다.
    try{
        $pdo->beginTransaction(); // 트랜젝션을 시작합니다.
        $sql = "UPDATE $tableName SET last_name = :last_name, first_name = :first_name, age = :age WHERE id = :id"; // 이름을 붙인 플레이스 홀더를 사용해 SQL을 구성합니다.
        $stmh = $pdo->prepare($sql);
        
        $stmh->bindValue(':last_name',$_POST['last_name'],PDO::PARAM_STR);  // bindValue 메소드로 플레이스 홀더에 결합합니다.
        $stmh->bindValue(':first_name',$_POST['first_name'],PDO::PARAM_STR);
        $stmh->bindValue(':age',$_POST['age'],PDO::PARAM_INT);
        $stmh->bindValue(':id',$id,PDO::PARAM_INT);
        
        $stmh->execute(); // execute 메소드로 SQL을 실행하면 수정됩니다.
        $pdo->commit(); // commit 메소드로 트랜잭션 처리를 확정합니다.
        print "데이터를 " .$stmh->rowCount()."건 수정하였습니다.<br>";
        }catch(PDOexception $Exception){
            $pdo->rollBack( ); // 실패한 경우에는 catch 블록의 rollback 메소드를 사용해 처음 상태로 돌리고 종료합니다.
            print "오류 : " .$Exception->getMessage();
        };
        // 세션 변수를 전부 삭제합니다.
        $_SESSION = array( ); // 세션 변수를 초기화
        // 마지막으로 세션을 파기합니다.
        @session_destroy( ); // 세션을 파기
    ?>
    
</body>
</html>