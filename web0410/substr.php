<?php

$insert="insertIntoDo.php";
$delete="deleteDo.php";
$select="selectFromDo.php";
$update="updateSetDo.php";

$db = array(
            "insert"=>"insertIntoDo.php",
            "delete"=>"deleteDo.php",
            "select"=>"selectFromDo.php",
            "update"=>"updateSetDo.php"
);

foreach($db as $index){
    echo substr($index,0,strLen($index)-4)."<br>";
}; // php 빼고 가져오기 .php 는 4개

echo "<br>".strlen(".php")." <- .php 뺀 길이<br><br>";

foreach($db as $index){
    echo substr($index,0,strLen($index)-strlen("Do.php"))."<br>";
}; // do까지 빼고 가져오기 Do.php 는 6개

echo "<br>".strlen("Do.php")." <- Do.php 뺀 길이<br><br>";
echo "do 제거 전 ==============================<br>";

    $siteArray=array();
    $siteArray[0] = "dbMemberLogIn.do";
    $siteArray[1] = "dbMemberLogOut.do";
    $siteArray[2] = "dbMemberJoin.do";
    $siteArray[3] = "dbMemberUpdate.do";
    $siteArray[4] = "dbMemberDelete.do";
    $siteArray[5] = "dbMemberSelect.do";
 
    foreach($siteArray as $key){

    echo $key."<br>";
    };

echo "do 제거 ==============================<br>";

    for($i=0;$i<count($siteArray);$i++){
        echo substr($siteArray[$i],0,strlen($siteArray[$i])-3)."<br>";
    };