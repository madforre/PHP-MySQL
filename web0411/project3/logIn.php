<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div class="login">
     <h1>Login</h1>
     <div class="login_form">
        <div class="login_header">
           <ul>
               <li>회원로그인</li>
               <li>비회원(주문조회)</li>
           </ul>                  
        </div>  
        <div class="login_content">
            <form action="loginOk.php" method="post">
                <ul>
                    <li><input type="text" name="userId" placeholder="아이디"></li>
                    <li><input type="password" name="userPw" placeholder="비밀번호"></li>
                    <li><input type="submit" value="로그인" id="login_submit"></li>
                </ul>
            </form>
        </div>
        <div class="login_footer">
            <ul>
                <li><a href="join.php">회원가입</a></li>
                <li><a href="id_search.php">아이디찾기</a></li>
                <li><a href="pw_search.php">비밀번호찾기</a></li>
            </ul>
        </div>
     </div>     
  </div>
  <script>
//      자바스크립트로 한 내 코드
//      var header_li = document.querySelectorAll('.login_header ul li');      
//      header_li[1].addEventListener('click',function(){
//      var content_li = document.querySelectorAll('.login_content>ul li');
//      header_li[1].style.background="#7d7";
//      header_li[1].style.color="#fff";
//      header_li[0].style.background="#cfc";
//      header_li[0].style.color="#1a1";
//      });
//      
//      header_li[0].addEventListener('click',function(){
//      var content_li = document.querySelectorAll('.login_content>ul li');
//      header_li[0].style.background="#7d7";
//      header_li[0].style.color="#fff";
//      header_li[1].style.background="#cfc";
//      header_li[1].style.color="#1a1";
//      });
      
      // 제이쿼리로 한 수업 코드
      
      var topBtn = $('.login_header >ul>li');
      var conBtn = $('.login_content ul>li>input');      
      var arrPh = ['아이디','비밀번호','주문번호','연락처'];
      
      topBtn.on('click',function(e){
                var idx = $(this).index();
                $(this).addClass('on').siblings().removeClass('on');          
                if(idx==0){                    
                    conBtn.eq(0).attr('placeholder',arrPh[0])
                    conBtn.eq(1).attr('placeholder',arrPh[1])
                }else if(idx==1){                    
                    conBtn.eq(0).attr('placeholder',arrPh[2])
                    conBtn.eq(1).attr('placeholder',arrPh[3])
                }
                });
  </script>
</body>
</html>