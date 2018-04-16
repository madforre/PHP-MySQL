<?php

include('./db_connect.php');

$sql1="SELECT userId FROM joinmember WHERE userId='wow5'";
$sql2="SELECT userPw FROM joinmember WHERE userId='wow5'";

$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

echo $result1->fetch_row()[0];
echo $result2->fetch_row()[0];

//current_field
//    field_count
//    num_rows
//    type
//    lengths