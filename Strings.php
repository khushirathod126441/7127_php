<?php
// strings functions are built-in functions
$str1 = "khushi";
$str2 = "rathod";
echo $str1 . " " .$str2;
echo "<br>";
print $str1 . " " .$str2;

echo "<br>";
echo strlen($str1);

echo "<br>";
print($str1 . " " . $str2);

echo "<br>";
echo strlen($str1);

echo "<br>";
$tristring = trim($str1);

echo "<br>";
echo strrev($str1);

echo "<br>";
echo strtolower($str1);

echo "<br>";
echo strtoupper($str1);

echo "<br>";
echo strcmp("$str1","$str2");

echo "<br>";
echo strstr($str1,"h");

echo "<br>";
echo stristr($str1,"h");

echo "<br>";
echo ucfirst("i am a student in MU");

echo "<br>";
echo ucwords("i am a student in MU");
?>