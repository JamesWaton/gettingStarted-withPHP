<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Cresting classes</h2>
    <h3>A class is something that reperesentes a real life thing e.g. a book</h3>
    <h3>You make it by setting it atrabutes </h3>
    <?php
          class Book  {
            var $title;
            var $author;
            var $pages;
          }
// new book1 is an object and Book is a blue print
          $book1 = new Book;
          $book1->title = "Harry Potter<br>";
          $book1->author ="JK Rowling<br>";
          $book1->pages = 400;


          $book2 = new Book;
          $book2->title = "Lord Of The Rings<br>";
          $book2->author="JK Rowling<br>";
          $book2->pages = 700;

          echo "Title: $book1->title";
          echo "Aurthor: $book1->author";
          echo "Pages: $book1->pages";


          echo "<br><br>Title: $book2->title";
          echo "Aurthor: $book2->author";
          echo "Pages: $book2->pages";
     ?>

<h1>Constructors</h1>
<h2>Is a special function we can put in a class that is called when we create an object </h2>

<?php
class Car{
  var $tpye;
  var $brand;
  var $year;
// two underscores and has to be spelt the same or otherwise it wont work
  function __construct($name){
    echo "$name";

    echo "New car Created <br>";

  }
}

$car1 = new Car("James ");
$car1->type = "i30 Tourer";
$car1->brand ="Hyundai";
$car1->year = 2013;
echo "$car1->type<br>";

$car2 = new Car("Andrew ");
$car2->type = "iLoad";
$car2->brand="Hyundai";
$car2->pages = 2018;

echo $car2->type;

  ?>


  <h3>Now with phones in the Construct method to make less lines of code</h3>
  <?php
  class Phone{
    var $model;
    var $brand;
    var $year;
  // two underscores and has to be spelt the same or otherwise it wont work
    function __construct($aType, $aBrand, $aYear){
    $this->model = $aType;
    $this->brand = $aBrand;
    $this->year = $aYear;
    }
  }

  $phone1 = new Phone("P20", "Huawei", 2018);
echo "$phone1->model<br>";

  $phone2 = new Phone("S8", "Samsung", 2017);
echo $phone2->model;

    ?>

    <h2>Object Functions</h2>
    <h3>checking if there on the honour role</h3>
    <?php
    class Student {
      var $name;
      var $major;
      var $gpa;

      function __construct($name, $major, $gpa){
        $this->name =$name;
        $this->major =$major;
        $this->gpa = $gpa;
      }

function hasHonours(){
  if($this->gpa >= 3.5){
    return "true";
  }
  return "false";
}
}

$student1 = new Student("Jim", "Business", 2.8);
$student2 = new Student("Pam", "Art", 3.6);

echo $student2->hasHonours();

    ?>

    <h2>Getters and Setters</h2>
    <h3>These are special functions for your php classes that alowes people acces to the atributes of the classes</h3>
    <h2>Making it impossible to change the rating</h2>

    <?php
class Movie {
  //public and var means anyone can change them
  public $title;
  //private means you can't change
  private $rating;

  function __construct($title, $rating){
    $this->title = $title;
    //set Rating so in cant be changed to e.g. in new movie section
    $this->setRating($rating);
  }
        // getter function gets the addtrabute
        function getRating(){
          return $this->rating;
        }
        //set is filter.
        //setting this is so they have to set it to one of these a cant put in e.g. Dog
        function setRating($rating){
          if($rating == "G" || $rating == "PG" || $rating == "M" || $rating == "MA" || $rating == "R"|| $rating == "NR"){
            $this->rating = $rating;
          }else{
            $this->rating ="NR";
          }

        }
    }
    $avengers = new Movie("Avengers", "dog");
    $avengers->setRating("");
    echo $avengers->getRating();

     ?>


     <h2>Learning Inheritence</h2>
<?php

class Chef{
  function makeChicken(){
    echo "The Chef makes chicken <br>";
  }
  function makeSalad(){
  echo "The Chef makes Salad";
  }
  function makeSpecialDish(){
    echo "The chef makes bbq ribs <br>";
  }
}

class ItalianChef extends Chef{
  function makePasta(){
    echo "The Italian Chef makes pasta";
  }
  //overiding special dish
  function makeSpecialDish(){
    echo "Italian chef makes pizza";
  }

}


$chef = new Chef();
$chef->makeSpecialDish();

$ItalianChef = new ItalianChef();
$ItalianChef->makeSpecialDish();
$ItalianChef->makePasta();
?>










  </body>
</html>
