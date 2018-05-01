<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>글목록</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/list.css">
</head>
<body>
			<?php 
					include "./lib/dbConnect.php";		//정렬     asc(기본 오름차순) 12345   작은 >> 큰순
	
	
	
					$no=$_GET['no'];// 레코드 순서(가져올 레코드 첫번째 순서)
					$row_list_size=5;// 페이당 보이는 레코드 갯수
	
					$page_list_size=5;//표시될 페이지 수
	
					if(!isset($_GET['no'])|| $_GET['no']<0) $no=0;
	
					$query="select * from board0430 order by num desc limit $no ,$row_list_size ; ";//id기준으로 내림차순 큰거 >> 작은.. 10 9 87  ..1
					$result=$conn->query($query);

	
					$query="select count(*) from board0430 ; ";// 테이블 레코드의 총갯수   
					$rowNums=$conn->query($query);	
					$total_rows=mysqli_fetch_array($rowNums); // mysqli_fetch_array 배열의 저장
	
					$totalRow= $total_rows[0];	
				 	$viewPages=ceil($totalRow/$row_list_size);  // 보여질 페이지 수
			
																	//5
					$current_page = ceil(($no+1)/$row_list_size); //# 현재 페이지 계산  $no값의 따라 0 5 10 현재페이지가 몇번제 	
	
					$start_page = floor(($current_page - 1) / $page_list_size) * $page_list_size + 1;//1 2 3 시작			
				
					$end_page = $start_page + $page_list_size - 1;// 페이지가 1일때
					
	
					if ($viewPages < $end_page) $end_page = $viewPages;
	
					 $start_page = floor(($current_page - 1) / $page_list_size) * $page_list_size + 1;//1 2 3 시작

	
					
	?>

			<div class="list">
			    <div class="title">
			    	<ul>
			    		<li>숫자</li>
			    		<li>닉네임</li>
			    		<li>글제목</li>
			    		<li class="times">글쓴시간</li>
			    		<li>조회수</li>
			    	</ul>			    	
			    </div>
				<ul>
					
					<?php
					
					if($result->num_rows!=0){ //DBFp
							while($row=$result->fetch_assoc()){	//DB에 레코드가 있을 때					
								?>
										<li><?=$row['num']?></li>
										<li><?=$row['nicName']?></li>
										<li><?=$row['title']?></li>
										<li ><?=$row['bTime']?></li>
										<li><?=$row['cnt']?></li>			
					<?php
							}
					}
					$conn->close();
					?>
				</ul>
				<div class="sub">
					<?php
						for ($i=$start_page;$i <= $end_page;$i++) {
							
 										$page= ($i-1) * $row_list_size;// 페이지값을 no 값으로 변환.
										if ($no!=$page){ //현재 페이지가 아닐 경우만 링크를 표시
 											echo "<a href=\"$_SERVER[PHP_SELF]?no=$page\">";
											}

											echo " [$i] "; //페이지를 표시

										if ($no!=$page){
											echo "</a>";
										}
								}
					
					?>
				</div>
			</div>
</body>
</html>