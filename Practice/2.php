<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            max-width: 80% ;
            background-color: blue;
            margin: auto;
            padding: 23px;
        }
   
    </style>
    <title>Document</title>
</head>
<body style="background-color: black; color: white;">

<div class="container">THIS IS A CONTAINER
    <h1>Learning Php</h1>
    <?php
    
   $age=7;
   if($age>18){
    echo "You can go to the party";
   }
   else if($age==7){
    echo "You are $age years old";
   }
   else{
    echo "You can not go to the party";
   }

    $languages= array("Java","C++","Nodejs");//Creating an array
    //echo $languages; //no error but No meaning
    echo "<br>";
    echo $languages[0];
    echo "<br>";
    echo count($languages);
    echo "<br>";

    
    // Loops
    $a=1;
    while($a <=10){
        echo $a;
        $a++;
    }
     
   $a=0;
    while($a <count($languages)){
        echo "<br> The value of languages is: ";
        echo $languages[$a];
        $a++;
    } 

    $a=200;
    do{
  echo "<br> The value of a is: ";
  echo $a;
  $a++;
    }while($a < 10);

    for($a= 0; $a<10; $a++){
        echo "<br> The value of a is: ";
        echo $a+1;
    }

   foreach($languages as $value){
    echo "<br> The value from for each is: ";
    echo $value;
   } // Mostly used and easier for arrays

   //Functions(used for repeatedly used code)
     function printnumber($number){
        echo " <br> Your number is $number";
     } 
    printnumber(45); //calling function
    printnumber(26);

     


    ?>
</div>

</body>
</html>
