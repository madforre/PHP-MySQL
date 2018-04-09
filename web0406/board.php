<?php

$members=array();

for($i=0;$i<10;$i++){
    $members[$i]=array(
        'userId'=>'jgh_'.$i,
        'userPw'=>'1111_'.$i,
        'userName'=>'hou_'.$i,
        'userAge'=>'11_'.$i,
        'userAddr'=>"광교신도시_".$i);
    
};
//echo"<pre>";
//print_r($members);
//echo"</pre>";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
    <style>
        *{margin : 0px; padding : 0px;}
        html,body { margin: 0px; padding: 0px;}
        ul,li,ol{list-style: none;}
        .board{
            width : 700px;
            height: auto;
            background: #ccc;
            margin : 0 auto;
            overflow: hidden;
            box-sizing: border-box;
        }
        .header{
            width : 100%;
            height : auto;
            overflow: hidden;
            font-size : 20px;
            box-sizing: border-box;
        }
        .header ul li{
            width : 20%;
            float : left;
            text-align: center;
            line-height: 40px;
/*            border: 3px solid #000;*/
            background: #333;
            color : #fff;
            box-sizing: border-box;
        }
        .contents li{
            float : left;
            width : 20%;
            color : #000;
            text-align: center;
            font-size : 15px;
            line-height: 40px;
            border : 2px solid;
            box-sizing: border-box;
        }
    
    </style>
</head>
<body>
   <div class="board">
      <div class="header">
         <ul>
            <li>아이디</li>
            <li>비밀번호</li>
            <li>이름</li>
            <li>나이</li>
            <li>주소</li>                      
         </ul>       
      </div>      
      <div class="contents">
      <ul>
        
         <?php
          
          for($i=0;$i<count($members);$i++){
              
              echo "<li>".$members[$i]['userId']."</li>";
              echo "<li>".$members[$i]['userPw']."</li>";
              echo "<li>".$members[$i]['userName']."</li>";
              echo "<li>".$members[$i]['userAge']."</li>";
              echo "<li>".$members[$i]['userAddr']."</li>";
          };
          
          foreach($members as $key=>$val){
              ?>
<!--
              echo $key."=>".$val['userId']."<br>";
              echo $key."=>".$val['userPw']."<br>";
              echo $key."=>".$val['userName']."<br>";
              echo $key."=>".$val['userAge']."<br>";
              echo $key."=>".$val['userAddr']."<br>";
              
              echo "======================<br>";
-->
             <li><?=$val['userId']?></li>
             <li><?=$val['userPw']?></li>
             <li><?=$val['userName']?></li>
             <li><?=$val['userAge']?></li>
             <li><?=$val['userAddr']?></li>
             
             
              <?php
          }
          
          ?>
          
          
          
      </ul>
       
       
   </div>
   </div>
 
</body>
</html>