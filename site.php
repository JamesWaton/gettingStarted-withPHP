<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<!--the publically avalible info in the url-->
 <h2>URL Paramater</h2>
 <br>
 <form action="site.php" method="get">
   Name: <input type= "text" name ="MyName"><br>
    <input type="submit"><br>
  </form>
    <?php
    echo $_GET["MyName"];
    ?>

    <h2> Learning about get vs post <h2>
    <h3> get puts the information into the url. So Change to post in method and in echo to make it a secret<h3>
      <form action="site.php" method="post">
        Password: <input type= "password" name ="password"><br>
         <input type="submit"><br>
       </form>
         <?php
         echo $_POST["password"];
         ?><br>

         <h2>Creating an array and selscting an element</h2>
<?php
  $friends = array("matt", "tom" , "jim", "oscar");
  //changing fisrt element of array
  $friends[0] = 400;
  //selecting the first element
  echo $friends[0];

  //adding a friend
  $friends[4] = "<br>jackob<br>";
  echo $friends[4];
  //counting frinds
  echo count($friends)



 ?>

 <h2> Learning checkboxes <h2>
    <form action="site.php" method="post">
            <!--[] stores all fruits in an array ticking this means they like apples-->
         Apples: <input type= "checkbox" name ="fruits[]" value="apples,"><br>
     Oranges: <input type= "checkbox" name ="fruits[]" value="oranges,"><br>
     Pears: <input type= "checkbox" name ="fruits[]" value="pears"><br>
      <input type="submit"><br>
    </form>
      <?php
      $fruits = $_POST["fruits"];
      echo $fruits[0];
      echo $fruits[1];
      echo $fruits[2];
      ?><br>

      <h2>Associate arrays</h2>
      <h3>store data values and key value pairs</h3>
      <h4>store names and grades</h4>
      <h3>Showing what grade the student got </h3>
<!--Showing what grade the student got-->
<form action="site.php" method="post">
         <input type= "text" name ="student"><br>
         <input type="submit"><br>
       </form>
      <?php

           //key is the name and mapping to the value is his grade. Keys have to be unique
          $grades = array("jim" => "A+", "pam" => "B-", "Oscar" => "C-" );
          // change grades
          $grades["jim"] = "F";

          //Showing what grade the student got
          echo $grades[$_POST["student"]]
         ?>


         <h1>Learning about functions</h1>
         <h2> a function is a special container that is designed for a special task </h2>


         <?php

         //sayHi is the name of the function {} inside is the actuall function
function sayHi($name, $age){
  echo "Hello $name, you are $age<br>";
}

//now my name will be stored as the values
sayHi("james", 40);
sayHi("jim", 50);
sayHi("jack", 70);
sayHi("jacob",20);
sayHi("jameson",23);


          ?>

          <h2>Return Statments</h2>
          <?php
          //user can pass one number
 function cube($num){
   echo "<br> Hello <br>";
   //return means finished
   return $num * $num * $num;
 }
 $cubeResult = cube(4);

 echo $cubeResult;
 // or skip the middle man
echo cube(4)
           ?>
<h2>Learning if statments</h2>
<h3>telling the computer to respond to a certain condtion weather its true or not</h3>
<?php

$isMale = true;
$isTall = true;
//in () should be true or false. As this is true it prints it it was change to false it would not
if ($isMale && $isTall){
  //only executed as its true
  echo "You are Male and Tall <br>" ;
} //if false this will execute
else {
  echo "you are not male";
}

// same as before but with || what means or.
if ($isMale || $isTall){
  //only executed as its true
  echo "You are Male or Tall <br>" ;
} //if false this will execute
else {
  echo "you are not male and not tall";
}

// now using an else if statement that is used for returning a statment if someone is male and short
$isTall = false;
if ($isMale && $isTall){
  //only executed as its true
  echo "You are Male and Tall" ;
} //checking if there not tall ! means not true
elseif ($isMale && !$isTall) {
  echo " You are a short male";
}//if false this will execute
elseif (!$isMale && $isTall) {
  echo " You are not a male but you are tall";
}else {
  echo "you are not male and not tall";
}

 ?>

 <h2>compare differnt information with if statment</h2>
 <h3>make a get max function</h3>
 <?php
function getMax($num1,$num2,$num3){
  if($num1 >= $num2 && $num1 >= $num3){
    return $num1;
  } elseif($num2 >= $num1 && $num2 >= $num3){
    return $num2;
  }else {
    return $num3;
  }

  }
  echo getMax(2000, 3000, 3000);
   ?>

   <h1>Next Stage Calculator</h1>

   <form action="site.php" method="post">
     <!-- step is making it take in decimals (floats) -->
          First Num: <input type= "number" step="0.1" name ="num1"><br>

          Operator(+,-,/,*): <input type="textbox" name= "op"><br>
          Second Num: <input type= "number" step="0.1" name ="num2"><br>
            <input type="submit"><br>
          </form>


          <?php
          $num1 = $_POST["num1"];
          $num2 = $_POST["num2"];
          $op = $_POST["op"];

        if($op == "+"){
          echo $num1 + $num2;
        } elseif($op == "-"){
          echo $num1 - $num2;
        }elseif($op == "*"){
          echo $num1 * $num2;
        }elseif($op == "/"){
          echo $num1 / $num2;
        } else {
          echo "invalid Operator";
        }

           ?>





































  </body>
</html>
