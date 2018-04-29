<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>게시글 작성</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/write.css">
	<link rel="stylesheet" href="css/header.css">
</head>
<body>
   <?php include "header.php" ?>
	<div class="write">
		<form action="writeOk.php" method="post">
			<ul>
				<li><h1 class="logo">게시판 글작성</h1></li>
				<li class="s1"><input type="text" name="name" placeholder="이름 입력"></li>
				<li class="s1"><input type="text" name="email" placeholder="이메일 입력"></li>
				<li class="s1"><input type="password" name="pass" placeholder="비빌번호 입력"></li>
				<li class="s1"><input type="text" name="title" placeholder="글 제목 입력"></li>
				<li  class="s4"><h3>게시글 작성</h3></li>
				<li class="s2"><textarea name="content" cols="30" rows="10"></textarea></li>
				<li class="s3"><input type="submit" value="글작성">
					 <input type="reset" value="다시작성">
					 <input type="button" class='goBack' value="되돌아가기">
				</li>
			</ul>
		</form>
	</div>
</body>
</html>