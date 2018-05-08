<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    require_once("MYDB.php");
    $pdo = db_connect();
    if(isset($_GET['action']) && $_GET['action'] == 'delete' && $_GET['id'] > 0){
        try{
            $pdo->beginTransaction();
            $id = $_GET['id'];
            $sql = "DELETE FROM $tableName WHERE id = :id";
            $stmh = $pdo->prepare($sql);
            $stmh->bindValue(':id',$id,PDO::PARAM_INT);
            $stmh->execute();
            $pdo->commit();
            print "데이터를" .$stmh->rowCount()."건 삭제하였습니다.<br>";
            }catch(PDOException $Exception){
            $pdo->rollBack();
            print "오류:" .$Exception->getMessage();
        }
    }
    
?>    
</body>
</html>