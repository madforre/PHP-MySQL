<?php  
    // 이름이 붙은 placeholder
    $sql = "INSERT INTO member (last_name, first_name, age) VALUES ( :last_name, :first_name, :age )";
    $stmh = $pdo->prepare($sql);
    $stmh->bindValue(':last_name', $_POST['last_name']);
    $stmh->bindValue(':first_name', $_POST['first_name']);
    $stmh->bindValue(':age',$_POST['age']);
    $stmh->execute( );
    // ? - 물음표 플레이스 홀더 ? 플레이스 홀더면 ?에 대응하는 순서대로 숫자를 기술한다. 
    $sql = "INSERT INTO member (last_name, first_name, age) VALUES (?, ?, ?)";
    $stmh = $pdo->prepare($sql);
    $stmh->bindValue(1, $_POST['last_name']);
    $stmh->bindValue(2, $_POST['first_name']);
    $stmh->bindValue(3, $_POST['age']);
    $stmh->execute( );
    //학습을 위한 코드이다. 동작하려면 DB에 접속해서 미리 테이블을 작성해두어야 한다.

?>