<?php

$userId = $_POST['userId'];
$userPw = $_POST['userPw'];

if(!isset($userId) || !isset($userPw)){
    
    echo" <script>              
            alert('잘못된 접근입니다. 로그인 페이지로 이동합니다.');
            location.href=\"login.php\";            
          </script>
        ";
    };


if($userId =="" || $userId =="null"){
    
    echo" <script>              
            alert('아이디를 입력하세요.');
            history.go(-1);            
          </script>
        ";
    }; 

if($userPw =="" || $userPw =="null"){
    
    echo" <script>              
            alert('패스워드를 입력하세요.');
            history.go(-1);            
          </script>
        ";
    };    

if($userId =="admin" && $userPw =="1531"){
        
    echo" <script>              
            alert('관리자 계정으로 로그인 되었습니다. 메인페이지로 이동합니다.');
            location.href='main.php?userId=".$userId."'
          </script>
        ";
    };    
