<?php
    $members = array();

    $members[0]=array('userId'=>"m1",
                      'userPw' =>'11', 
                      'userName'=>'son1',
                      'userAge' =>10,
                      'userPhone' => '010-0000-0000'
                     );
    $members[1]=array('userId'=>"m2",
                      'userPw' =>'21', 
                      'userName'=>'son2',
                      'userAge' =>20,
                      'userPhone' => '010-1111-0000'
                     );
    $members[2]=array('userId'=>"m3",
                      'userPw' =>'31', 
                      'userName'=>'son3',
                      'userAge' =>30,
                      'userPhone' => '010-2222-0000'
                     );

    echo "<pre>";
    print_r($members);
    echo "</pre>";
    echo count($members)."개 = \$members의 배열의 총 원소의 갯수, 즉 배열의 길이<br>";
    echo count($members[0])."<br>"; // 배열 요소 하나당 >> 5개
    echo $members[0]['userId'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1">
       <tr>
          <th>아이디</th>
          <th>비밀번호</th>
          <th>이름</th>
          <th>나이</th>
          <th>전화번호</th>          
       </tr>
       <?php
        
//        for($i=0;$i<count($members);$i++){
//                
//        echo "<pre>
//        <tr>
//          <td>".$members[$i]['userId']."</td>
//          <td>".$members[$i]['userPw']."</td>
//          <td>".$members[$i]['userName']."</td>
//          <td>".$members[$i]['userAge']."</td>
//          <td>".$members[$i]['userPhone']."</td>
//       </tr>
//        </pre>";
//        
//        };
        
                
        foreach($members as $idx){
            echo "<tr>";
            foreach($idx as $key=>$val){
                echo "<td>".$val."</td>";                        
            }
            echo "</tr>";
        }        
        
        foreach($members as $idx){
            
            ?><tr>
            <?php
            foreach($idx as $key=>$val){
                ?>
                <td><?=$val?></td> 
                <?php
            }
            ?>
            </tr>
            <?php
            }        
        ?>
        
<!--
 반복해야하는 비효율적인 방법
       <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>          
       </tr>
       <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>          
       </tr>
       <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>          
       </tr>
-->       

    </table>
    
</body>
</html>