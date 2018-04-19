<?php
	session_start();
?>
<div class="header">
	<div class="gnb">
		<ul>
			<li><span class="on2"></span>
				<a href="index.php">HOME</a>
			</li>
			<li><span ></span>
				<a href="#">Tea Shop</a>
				<ul class="sub">
					<li>items</li>
					<li>items</li>
					<li>items</li>
				</ul>
			</li>
			<li><span></span>
				<a href="#">Tea Shop</a>
				<ul class="sub">
					<li>items</li>
					<li>items</li>
					<li>items</li>
				</ul>
			</li>
			<li><span ></span>
				<a href="#">Tea Shop</a>
				<ul class="sub">
					<li>items</li>
					<li>items</li>
					<li>items</li>
				</ul>
			</li>
			<li class="member"><span ></span>
				<a href="#">MEMBER</a>
				<ul class="sub">
				<?php
					if(isset($_SESSION['sessionId'])){//로그인(세션이 있다)					
						echo "<li class='logout'><a href=\"logout.php\">로그아웃</a></li>";
						echo "<li class='update'><a href=\"memberUpdate.php\">회원수정</a></li>";
						echo "<li class='delete'><a href=\"delete.php\">회원탈퇴</a></li>";
						echo "<li class='select'><a href=\"select.php\">회원조회</a></li>";
					}else{//로그아웃(세션이 없다)						
						echo "<li class='right'><a href='login.php'>로그인</a></li>";
						echo "<li class='right'><a href='join.php'>회원가입</a></li>";
						echo "<li class='right'><a href='board.php'>게시판</a></li>";
					}
				?>
					
				</ul>
			</li>
		</ul>
		<?php
		if(isset($_SESSION['sessionId'])){//로그인(세션이 있다)					
				echo "<span class='sessionId'>".$_SESSION['sessionId']."님</span>";
		}
	?>
	</div>
	
	<div class="box"></div>
</div>


