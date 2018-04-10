<?php

// trim 공백제거

$str=" manso ";
echo $str;
echo "<br>";
echo "공백 제거 전 문자열 갯수 : ".strlen($str);
echo "<br>";

echo trim($str);
echo "<br>";
echo "공백 제거 후 문자열 갯수 : ".strlen(trim($str));