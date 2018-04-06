<?php

//for    
//    초기화;조건식;증감식

//구구단시작

echo "구구단 시작"."<br><br>";

for($i=2;$i<10;$i++){ 
    
    
    for($j=1;$j<10;$j++){
        echo $i."x".$j."=".($i*$j)."<br>";
    };
    
    
};


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        *{margin:0;padding:0;}
        html,body {margin : 0; padding : 0; width : 100%;}
        ul,ol,li{ list-style: none}
        .box { 
            width : 500px;
            height : auto;
            border : 1px solid;
            margin : 0 auto;
            overflow : hidden;
        } 
        .box>ul>li{
            width : 25%;
            height : 125px;
            border : 1px solid;
            float:left;
            box-sizing:border-box;
            text-align : center;
            line-height : 123px;
        }   
     
    </style>
</head>
<body>
   <div class="box">
      <ul>
         <?php
          for($i=0;$i<120;$i++){
              echo "<li>list".$i."</li>";
          };
          ?>
          
     </ul>      
   </div>
    
</body>
</html>