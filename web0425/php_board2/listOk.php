<?php
	header("Content-Type:text/html;charset=UTF-8");
?>
<?php 
include "dbConnect.php";

$query="SELECT * FROM php_board; ";
$result=$conn->query($query);

$arrDbData=[];

if($result->num_rows!=0){  //DB에 레코드가 없을 때
	
		while($row=$result->fetch_assoc()){	//DB에 레코드가 있을 때
			$arrDbData[]=$row['id'];
			$arrDbData[]=$row['name'];
			$arrDbData[]=$row['pass'];
			$arrDbData[]=$row['title'];
			$arrDbData[]=$row['content'];
			$arrDbData[]=$row['wdate'];	
			$arrDbData[]=$row['view'];
			
		
			
		}
}

$conn->close();


?>