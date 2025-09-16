<?php
echo "<h1> My Resume </h1>";
echo "<br>";
echo "<b>My Personal Details:</b> <br><br>";
echo "Name: Gor Yashvi Sandeepkumar <br>";
echo "Age: 10<br>";
echo "Birthdate: 20/10/2010 <br><br>";
echo "<b>My Educational Details:</b> <br> <br>";
$sem=3;
$eng="Computer Engineering";
$uni="Charusat";
echo "I am currently in $sem rd Semester.<br>";
echo "I am pursuing $eng.<br>";
echo "I am Pursuing Btech from $uni University.<br>";

$name="Yashvi";
PrintName(($name));
Sum(2,3);
function PrintName($name){
echo "My name is $name.<br>";
}
function Sum($x, $y){
    return $x+$y;
}
$sum=Sum(2,3);
echo "The sum of 2 and 3 is $sum.<br>";

function Factorial($x): int{
 if($x==1){
    return 1;
 }
 else{
    return $x*Factorial($x-1);
 }
}

$factorial=Factorial(5);
echo "The factorial of 5 is $factorial. <br><br>";

for($i=0; $i<5; $i++){
    for($j=0; $j<5-$i; $j++){
       echo "*";
    }
    echo "<br>";
}



?>
