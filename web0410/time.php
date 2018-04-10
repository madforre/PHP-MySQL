<?php
// 시간 / 날짜 함수
// 타임스탬프란 1970년 1월 1일 00:00:00을 시작기준으로 경과한 초를 의미한다.
echo time()."<br>"; // 현재 timestamp(특정한 시각)

// date("표시될 포맷",특정 timestamp);
echo date('y-m-d',time())."<br>";


// mk는 만든다는 의미이다.(앞으로도 계속 나옴)
// mktime(시,분,초,월,일,년) >> mk >> 특정 timestamp 만든다.
echo mktime(10,10,10,4,10,2018)."<br>";
echo date('y-m-d', mktime(10,10,10,4,10,2018))."<br>";

//형식 맞는지 체크
echo checkdate(02,11,2018)."<br>"; // 날짜 형식이 맞으면 true 값을 반환

if(checkdate(01,31,2018)){
    echo "날짜 형식이 맞습니다.";
}else{
    echo "날짜 형식이 맞지 않습니다.";
}

//get... 가져온다. 날짜를 가져오는데 배열로 가져온다.
getdate(time()); // timestamp를 변환한다. > 배열로

$dateArray = getdate(time());

echo "<pre>";
var_dump($dateArray);
echo "</pre>";

echo "현재 시간은 ";
echo $dateArray['year']."년 ";
echo $dateArray['mon']."월 ";
echo $dateArray['mday']."일 ";
echo $dateArray['hours']."시 ";
echo $dateArray['minutes']."분 ";
echo $dateArray['seconds']."초 ";
echo "입니다.<br>";

$year = $dateArray['year'];
$mon = $dateArray['mon'];
$mday = $dateArray['mday'];
$hours = $dateArray['hours'];
$minutes = $dateArray['minutes'];
$seconds = $dateArray['seconds'];
$time=$year."년 ".$mon."월 ".$mday."일 ".$hours."시 ".$minutes."분 ".$seconds."초 <br>";

echo $time;