<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">This is my first Website with Php</div>
    <?php // Not CaseSensitive
       echo "Hello World. Printed using Php"; //for print statement
       echo "<br>";
       
    ?>

    <?php // It is possible to write this multiple times
       echo "Hello World";
       echo "<br>";
       Echo "Hello World"; // Case can be changed
       echo "<br>";
       
       $variable1 = 20; //dynamically typed language as no need to tell what type of data a variable is storing 
       $variable2 = 10;

       echo $variable1; 
       echo "<br>";
       echo $variable2;
       echo "<br>";

       Echo $variable1 + $variable2; echo"<br>";

       ECHO "Yashvi";
       echo "<br>";
        
       // Arithmetic Operators

       echo "The value of variable1 + variable2 is ";
       Echo $variable1 + $variable2; 
       echo "<br>";
       Echo $variable1 - $variable2;
       echo "<br>";

       //Assignment operators

       $var = $variable1;
       $var+=1;
       $var-=1;
       $var*=2;

       echo "The value of var is ";
       echo $var;
       echo "<br>";

       //Comparison Operators

       echo "<h1> Comparison Operators </h1>"; // Html can be written this way using php

       echo "The value of 1==4 is ";
       echo var_dump(1==4);
       echo "<br>";
       echo var_dump(1!=4);
       echo "<br>";
       echo var_dump(1>=4);
       echo "<br>";
       echo var_dump(1<=4);
       echo "<br>";

       // Increment / Decrement Operators
       
       
    //    echo $variable1++; //20
    //    echo "<br>";
    //    echo $variable1--; //21
    //    echo "<br>";
    //    echo --$variable1; //19
    //    echo "<br>";
    //    echo ++$variable1; //20
    //    echo "<br>";

    //Logical Operators

    $myvar= (false and true);
    echo var_dump($myvar);
    echo "<br>";

    $myvar = (true or false);
    echo var_dump($myvar);
    echo "<br>";

    $myvar = (true xor false);
    echo var_dump($myvar);
    echo "<br>";

    // Data types (primary: 6)
     //1. String
     //2. Integer
     //3. Float
     //4. Boolean
     //5. Array
     //6. Object

     $var= "This is a String";
     echo var_dump($var);
     echo "<br>";

     $var = 67;
     echo var_dump($var);
     echo "<br>";

     $var = 67.6;
     echo var_dump($var);
     echo "<br>";

    $var = true;
     echo var_dump($var);
     echo "<br>";
 

     // constant

     define('PI',3.14);

     
     echo PI;
     echo "<br>"; 
   




     

   



       
        

  


    ?>


</body>
</html>
