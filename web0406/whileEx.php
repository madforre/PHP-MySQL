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
            margin-top : 30px;
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
        .son{
            margin : 15px;
        }
        .box img{
            display: block;
            width : 500px;
            height : 300px;
        }
     
    </style>
</head>
<body>
   <div class="box">
      <ul>
         <?php
            //while
            $i=0; // 초기화
            // 조건식
            while($i<12){
                ?>
                <li>list<?=$i?></li>
                <?php
                $i++;                            
            }    
          ?>          
    
     </ul>      
   </div>
   <div class="box">
      <ul>
             
              <?php
          $i=0;
          while($i<9){
              echo "<img src='img/bg".$i.".jpg' alt='bg".$i.".jpg'>";
              $i++;
          }; 
          ?>
     </ul>      
   </div>
          
   
</body>
</html>


