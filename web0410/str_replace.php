<?php

// replace (바꾼다) 선택된 문자열을 바꿔라.

$str = "manso PHP 2018";
echo $str;
echo "<br>";

echo str_replace($str,"2018","2019");
echo "<br>";

echo $str."<br>";
echo str_replace($str,"PHP","PHP7");

