<?php
    // 플레이스 홀더란?
    // 심볼 또는 수학 식 또는 컴퓨터의 지시를 대체 할 수 있는 특정 부분의 정보이다.

    // SQL의 각 플레이스 홀더와 값은 바인드(결합) 해주어야 한다.
    // 이용할 수 있는 메소드로는 두 가지가 있다.
    // bindValue와 bindParam 이다.
    
    include 'dbconnect.php';
        
    // 1. 이름이 붙은 placeholder

    $sql = "INSERT INTO $tableName (last_name, first_name, age) VALUES ( :last_name, :first_name, :age )";
    $stmh = $pdo->prepare($sql);
    
    $stmh->bindValue(':last_name', $_POST['last_name']);
    $stmh->bindValue(':first_name', $_POST['first_name']);
    $stmh->bindValue(':age', $_POST['age']);
    $stmh->execute( );

    // 2. ? placeholder

//    $sql = "INSERT INTO member (last_name, first_name, age) VALUES ( ?, ?, ?)";
//    $stmh = $pdo->prepare($sql);
//    $stmh->bindValue(1,$_POST['last_name']);
//    $stmh->bindValue(2,$_POST['first_name']);
//    $stmh->bindValue(3,$_POST['age']);
//    $stmh->execute( );