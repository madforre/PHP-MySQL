<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>내용</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/read.css">
</head>
<body>

<?php include "header.php" ?>
			<div class="read">
						<form action="updateOk.php" method="post">
							<ul>
				
					<?php 
					include "dbConnect.php";

					$id =$_GET['id'];
					$query="select * from php_board where id='$id' ; ";//id기준으로 내림차순 큰거 >> 작은..
					$result=$conn->query($query);

					if($result->num_rows!=0){ //DBFp
							while($row=$result->fetch_assoc()){	//DB에 레코드가 있을 때					
								?>
												<li><h1 class="logo">게시판 글내용</h1></li>
												<li class="s1"><span class="con"><?=$row['id']?>님</span><input type="hidden" name="id" value="<?=$row['id']?>"></li>
												<li class="s1"><span class="con">이름: </span><input type="hidden" name="name" value="<?=$row['name']?>"></li>
												<li class="s1"><span class="con">이메일: </span><input type="hidden" name="email" value="<?=$row['email']?>"></li>
												<li class="s1"><span class="con">비빌번호: </span><input type="hidden" name="pass"  value="<?=$row['pass']?>"></li>
												<li class="s1"><span class="con">글 제목: </span><input type="text" name="title" value="<?=$row['title']?>"></li>
												<li class="s1"><span class="con">글쓴시간: </span><input type="hidden" name="wdate" value="<?=$row['wdate']?>"></li>
												<li class="s1"><span class="con">글 조회수: </span><input type="hidden" name="view" value="<?=$row['view']?>"></li>
												<li  class="s4"><h3>게시글 보기</h3></li>
												<li class="s2"><textarea name="content" cols="30" rows="10"><?=$row['content']?></textarea></li>
												<li class="s3"><input type="submit" value="글수정">
													 <input type="reset" value="다시작성">
													 <input type="button" class='goBack' value="되돌아가기">
								
					<?php
							}
					}
					$conn->close();
					?>
					</ul>
					</form>
				</div>
</body>
</html>