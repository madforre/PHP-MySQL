<?php
	header("Content-Type:text/html;charset=UTF-8");
?>
<?php 
include "dbConnect.php";

$query="SELECT * FROM php_board; ";
$result=$conn->query($query);

if($result->num_rows==0){  //DB에 레코드가 없을 때
		echo "
			<script>
				alert('가져올 data가 없습니다');
				location.href='index.php';
			</script>
		";	
		exit;
}else{
		while($row=$result->fetch_assoc()){	//DB에 레코드가 있을 때
			$id=$row['id'];
			$name=$row['name'];
			$pass=$row['pass'];
			$title=$row['title'];
			$content=$row['content'];
			$wdate=$row['wdate'];	
			$view=$row['view'];
			?>
			<div class="list">
				<ul>
					<li><?=$id?></li>
					<li><?=$name?></li>
					<li><?=$pass?></li>
					<li><?=$title?></li>
					<li><?=$content?></li>
					<li><?=$wdate?></li>
					<li><?=$view?></li>
				</ul>
			</div>
			
			
			<?php
			
		}
}

$conn->close();


?>
