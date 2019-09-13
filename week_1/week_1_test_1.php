<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>22.avg 2019.</title>
</head>
<body>
   <h1><u>Vježba 1.</u></h1> 

   <?php
   
   echo ("<h1>Sasa's site</h1><br> Hello World");
   echo "<hr>";
   echo "<p>This is my site!</p>";
   echo "<br><br>";





   $characterName = "Tom";
   $characterAge = 80;

   echo "There once was a man named $characterName <br>";
   echo "He was $characterAge years old <br>";

   $characterName = "Mike"; // mjenja sve ispod promjene varijable

   echo "He really liked the name $characterName <br>";
   echo "But he didn't like being $characterAge old <br>";
   ?>

<h1><u>Vježba 2.</u></h1> 
<p>DATA TYPE</p><br>
<?php

$phrase = "To be or not to be"; //fraze
$age = -30; //cijeli broj
$gpa = 30.3; //decimalni zapis
$isMale = true; //

echo $phrase;
?>
<hr>
<p>WORKING WITH STRINGS</p><br>

<?php

$phrase = "Giraffe Academy<br>";
$phrase[0] = "B"; //mjenja 1.string po redu iz 'G' u 'B'


echo strtolower($phrase); //pretvaranje varijable u mala slova
echo strtoupper($phrase); //pretvaranje varijable u velika slova
echo $phrase[0];  //broj str po redu
echo "<br>";
echo $phrase[5];  //broj stringa po redu
echo "<br>";
echo "<br>";



$phrase = "Giraffe Academy<br>";
echo str_replace("Giraffe", "Panda", $phrase); //zamjena stringova sa novim stringom
echo "<br>";


$phrase = "Giraffe Academy<br>";
echo substr($phrase, 8, 3);

?>
<hr>


<p>WORKING WITH numbers</p><br>

<?php 

echo "40<br>"; //ispis brojeva
echo 5+9; //sabiranje brojeva
echo "<br>";
echo 10%3;
echo "<br>";
echo 4+2*10;
echo "<br>";
echo "<br>";
echo "<br>";

$num = 10;
$num++;

echo $num;
echo "<br>";

$num = 10;
$num += 25;

echo $num;

echo "<br>";
echo "<br>";
echo "<br>";

echo abs(-100); //apsolutna vrijednost
echo "<br>";
echo sqrt(144); //kvadratni korijen
echo "<br>";

echo "<br>";
echo max (2, 10); //ispisuje maximalni broj 
echo "<br>";
echo min (2, 10); //minimalni broj

echo "<br>";
echo "<br>";
echo "<br>";
echo round (3.7); //zaokruzivanje broja
?>


<h1><u>Vježba 3.</u></h1> 
<p>GETTING USER INPUT</p><br>



<form action = "test.php" method="get">

Name: <br><input type="text" name="name"><br>
Age: <br><input type="number" name="age">
<br>
<input type="submit">

</form>
<br>

Your name is: <?php 

echo $_GET["name"];//ispis imena sa unosom?>  
<br>

Your age is: <?php 

echo $_GET["age"] //ispis godina sa unosom?>
<hr>


<h1><u>Vježba 4.</u></h1> 
<p>BUILDING A BASIC CALCULATOR</p><br>

<form action = "test.php" method="get">
<input type="number" name="num1">
<br>

<input type="number" name="num2">
<input type="submit">
<br>



</form>

Answer: <?php echo $_GET["num1"] + $_GET["num2"]
?>

<h1><u>Vježba 5.</u></h1> 
<p>MAD LIBS GAME</p><br>


<form action = "test.php" method="get">

color: <input type="text" name="color"><br>
plural noun: <input type="text" name="pluralNoun"><br>
celebrity: <input type="text" name="celebrity"><br>


<input type="submit">
<br>





<?php

$color = $_GET["color"];
$pluralNoun = $_GET["pluralNoun"];
$celebrity = $_GET["celebrity"];

echo "Roses are $color <br>";
echo "$pluralNoun are blue <br>";
echo "I love $celebrity <br>";
?>


<h1><u>Vježba 6.</u></h1> 
<p>URL parameters</p><br>


<form action = "test.php" method="get">

Name: <br><input type="text" name="name"><br>
<input type="submit">
</form>


Your name is: <?php 

echo $_GET["name"];//ispis imena sa unosom?>  
<br>


<h1><u>Vježba 7.</u></h1> 
<p>POST VS GET</p><br>

<form action = "test.php" method="post">

Password: <br><input type="password" name="password"><br>
<input type="submit">
</form>


<?php 

echo $_POST["password"];?>  
<br>

<h1><u>Vježba 7.</u></h1> 
<p>ARRAYS</p><br>


<?php 

$friends = array("Kevin", "Karen", "Oscar", "Jim");
$friends[1] = "Dwight";
echo $friends[1];
?>



<h1><u>Vježba 8.</u></h1> 
<p>Checkbox</p><br>



<form action = "test.php" method="post">

Apples: <br><input type="checkbox" name="fruits[]" value="apples"><br>
Oranges: <br><input type="checkbox" name="fruits[]" value="oranges"><br>
Pears: <br><input type="checkbox" name="fruits[]" value="pears"><br>
<input type="submit">
</form>

<?php

$fruits = $_POST["fruits"];

echo $fruits[1]; 

?>

<h1><u>Vježba 9.</u></h1> 
<p>Associative Arrays</p><br>


<?php

$grades = array ("Jim"=> "A", "Pam"=>"B-", "Oscar"=>"C+");

echo $grades["Pam"];


?>


<h1><u>Vježba 10.</u></h1> 
<h3>Functions</h3><br> <!--funkcije-->


<?php


function sayHi($name, $age){
    echo "Hello $name, you are $age <br>";
}

sayHi("Tom", 40);
sayHi("Oscar", 25);
sayHi("John", 10);


?>


<h1><u>Vježba 11.</u></h1> 
<h3>Return statement</h3><br> 

<?php

function cube($num){

return $num * $num * $num; 

}

$cubeResult = cube(4);
echo $cubeResult;

?>


</body>
</html>