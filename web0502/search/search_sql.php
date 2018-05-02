<?php

// 검색용 SQL 실행하기

include "../dbconnect.php";

// POST 데이터를 받습니다.

$search_key = '%' .$_POST['search_key']. '%';// 검색 키워드를 할당하고 중간 일치 검색을 합니다.

// LIKE 연산자는 지정된 패턴을 검색하는데 사용합니다.
// SQL에서 흔히 사용하는 연산자 "=" 은 무조건 같을 때만 검색이 됩니다.
// LIKE 연산자를 사용하면 내용중에 해당하는 단어만 있으면 바로 검색이 됩니다.



// SQL에서 [%] 는 [0 문자 이상인 임의의 문자열]을 의미합니다. 와일드카드. 
// 정규식 패턴도 사용이 가능하다.
// [%검색 키워드%]로 하면 중간 일치(검색 키워드가 중간에 포함된 데이터) 검색을 실행할 수 있습니다.
// %를 사용하는 검색에서는 조건문에 [=]이 아니라 [like]를 사용합니다.
// [WHERE 조건1 OR 조건2]는 조건1 또는 조건2와 일치하면의 의미입니다.

// 참고 : 후방 일치는 [%검색키워드] 


try{
    $sql = "SELECT * FROM $tableName WHERE last_name like :last_name OR first_name Like :first_name";
    $stmh = $pdo->prepare($sql);
    $stmh->bindValue(':last_name',$search_key,PDO::PARAM_STR);
    $stmh->bindValue(':first_name',$search_key,PDO::PARAM_STR);
    $stmh->execute();
    $count = $stmh->rowCount( );// SQL을 실행한 결과의 건수를 반환 값으로 $count에 할당합니다.
    print "검색 결과는 " .$count. "건입니다.<br>";// 검색 건수를 돌려줍니다.
    }catch(PDOException $Exception){
    print "오류:" .$Exception->getMessage( );
    }
if($count < 1){
    print "검색 결과가 없습니다. <BR>";
    }else{
    ?>
    <TABLE width="450" border="1" cellspacing="0" cellpadding="8">

    <tbody>
       <tr>
           <th>번호</th>
           <th>성</th>
           <th>이름</th>
           <th>나이</th>
       </tr>        
    </tbody>
    <?php
        while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td align="center"><?=htmlspecialchars($row['id'])?></td>
                <td><?=htmlspecialchars($row['last_name'])?></td>
                <td><?=htmlspecialchars($row['first_name'])?></td>
                <td><?=htmlspecialchars($row['age'])?></td>
            </tr>
            <?php
            }
        ?>
        </tbody>
    </TABLE>
    <?php    
    }
    ?>
    