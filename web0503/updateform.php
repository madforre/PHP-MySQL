<?php
    @session_start(); // 세션을 시작합니다.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP TEST</title>
</head>
<body>
    <h4>아래에 수정할 데이터를 입력하세요.</h4>
    <?php
        require_once("MYDB.php"); // 접속용 파일을 읽어 들입니다.
        $pdo = db_connect(); // 데이터 베이스에 접속하면 데이터베이스 핸들러를 $pdo에 할당합니다. (데이터 베이스 접속 함수를 실행합니다.)
        
        $id = 1; // 여기를 변경하면 수정 대상이 바뀝니다. 수정용 ID를 설정합니다. 즉 데이터를 조작하는 키.
        $_SESSION['id'] = $id; // 다음 페이지에서 이용할 수 있도록 세션id값을 설정해줍니다.
    
        try{
            $sql = "SELECT * FROM $tableName WHERE id=$id "; // 검색 건수를 지정합니다.
            $stmh = $pdo->prepare($sql);
            $stmh->bindValue(':id',$id,PDO::PARAM_INT);
            $stmh->execute(); // SQL문을 실행합니다.
            $count = $stmh->rowCount(); // 검색 건수를 rowCount()메소드로 취득하여 $count에 할당합니다.
        }catch(PDOException $Exception){
            print "오류:" .$Exception->getMessage();
        }
    ?>
    
<!--
    id를 조건으로 이용하는 이유는 id는 중복되지 않는 유일한 값으로 확실히 1건만 나타내기 때문입니다.
    이러한 데이터를 유니크라고 부릅니다.
-->

<?php
    if($count < 1){
        print "수정 데이터가 없습니다.<BR>";
    }else{
        $row = $stmh->fetch(PDO::FETCH_ASSOC); // 검색된 데이터는 스테이트먼트 핸들러(PDOStatement 클래스)의 fetch 메소드로 얻을 수 있습니다.
                                               // 인수의 PDO::FETCH_ASSOC 는 칼럼명을 이용한 연관 배열로 데이터를 받을 것을 지시한 것입니다.
        ?>
        <form action="update.php" method="post" name="form1">
            <label for="id">번호</label> : <?=htmlspecialchars(($row['id']))?><br>
            <label for="last_name">성</label> : <input type="text" name="last_name" value="<?=htmlspecialchars($row['last_name'])?>"><br>
            <label for="first_name">이름</label> : <input type="text" name="first_name" value="<?=htmlspecialchars($row['first_name'])?>"><br>
            <label for="age">나이</label> : <input type="text" name="age" value="<?=htmlspecialchars($row['age'])?>"><br>
            <input type="submit" value="수정">
        </form><?php
    }
    ?>
</body>
</html>