<?php
//잘못된 접근

if(!isset($_POST['userId']) || !isset($_POST['userPw']) || 
   !isset($_POST['userGender']) || !isset($_POST['userPhone'])
   || !isset($_POST['userHobbys'])){
    	echo "
		<script>
			alert('접속 경로 오류! 다른페이지로 이동합니다.');

		</script>
	";
	exit;
}

$userId=$_POST['userId'];
$userPw=$_POST['userPw'];
$userGender=$_POST['userGender'];
$userPhone=implode('-',$_POST['userPhone']);
$userHobbys=implode(',',$_POST['userHobbys']);


//공백 입력 방지

if($userId=="" || $userId==null){
    echo "
        <script>
        alert('아이디를 입력하세요');
        history.go(-1);
        </script>    
    ";
    exit;
};
if($userPw=="" || $userPw==null){
    echo "
        <script>
        alert('비밀번호를 입력하세요');
        history.go(-1);
        </script>    
    ";
    exit;
};
if($userGender=="" || $userGender==null){
    echo "
        <script>
        alert('성별을 선택하세요');
        history.go(-1);
        </script>    
    ";
    exit;
};


//DB연결

$query="insert into memberJoin(userId,userPw,userGender,userHobbys,userPhone)";

$query.=" value('$userId','$userPw','$userGender','$userHobbys','$userPhone')";

echo $query;

?>