<?php
$str= "This is a string";
echo $str;
echo "<br>";
$len = strlen($str);
echo "The length of the string is ".$len . "<br> Thank you "; 
echo "<br>";
// counting length of string
echo "The number of words in this string is ".str_word_count($str).".";
echo "<br>";

// reversing a string
echo "The reversed string is " .strrev($str). ".";
echo "<br>";

//Position of a string
echo "The position of the string is " . strrpos($str,"is"). ".";

echo "<br>";

//replacing a string
echo "The replaced string is ". str_replace("is","at",$str).".";









?>
