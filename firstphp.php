<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //setting variables
    $characterName = "james mathew shires Watson" ;
//intiger is whole number not with decimal place
    $age = 21;
    //float
    $score = 5.5;
echo "hi my name is $characterName <br>";
echo " and i am $age years old<br>";
echo "<p>This is my </p>";
$characterName = "james Watson" ;
echo "hi my name is $characterName <br>";
echo " and i am $age years old<br>";
 $phrase = "To be or not to be";
 //changing first index
$phrase = "happy chappy<br>";
 echo strtoupper($phrase);
 //finding the length
 echo strlen($phrase);
 echo("<br>");
//changing first index
  $phrase[0] = "c";
  echo strtoupper($phrase);
  // replacing the first word with two words
echo str_replace("cappy", "The real", $phrase);
// getting parts of the string we want
echo substr($phrase, 8, 3);
// maths
//divided
echo("<br>");

echo 5 % 6;
echo("<br>");
echo 5 + 6;
echo("<br>");
echo 5 - 6;
echo("<br>");
//times
echo 5 * 6;
echo("<br>");
//sums up brackets first
echo(4+ 5) * 10;
echo("<br>");
echo 4+ 5 * 10;
echo("<br>");
$num = 10;
// plus 1 to 10
$num++;
//minus 1 to 10
$num--;


echo("<br>");
echo $num;
//changing num variable
$num = $num * 25;
echo("<br>");
echo $num;
echo("<br>");
//what ones higher
echo max(2, 10);
?>
<!-- creating  a form             get means get information -->
<form action = "site.php" method = "get">
<!-- text means text box -->
Name: <input type= "text" name ="name">
<br>
Age: <input type= "number" name ="age">
<!-- button to submit -->
<input type ="submit">
</form>
<br>
<!--collecting the input for the submit button -->
your name is <?php echo $_GET["name"] ?>
<br>
 your age is <?php echo $_GET["age"] ?>
<br>
<br>
<h2>basic calculator has to have numbers in or error appears</h2>
 creating a basic calculator
<br>
Basic calculator
<form action="site.php" method="get">
  <input type="number" name="num1">
  +
  <input type="number" name="num2">
<input type="submit">
</form>


Answer: <?php echo $_GET["num1"] +  $_GET["num2"] ?>
<br>
<br>

<!-- creating a mad lib takes uses words and adds them to a story -->
<h2>Basic mad lib</h2>
<br>
<form action="site.php" method="get">
  Color:<input type="text" name="color"><br>
Plural noun:<input type="text" name="pluralNoun"><br>
Celebrity:<input type="text" name="celebrity"><br>
<input type="submit"><br>
</form>


<?php
$color = $_GET["color"];
$pluralNoun = $_GET["pluralNoun"];
$celbrity = $_GET["celebrity"];
echo "roses are $color <br>";
echo "$pluralNoun are blue <br>";
echo "i love $celbrity <br> ";

 ?>
</body>
</html>
