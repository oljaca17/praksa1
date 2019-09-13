<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>KALKULATOR</title>

    </head>
    <body>
    <div class="jumbotron"><h1>Moj prvi kalkulator</h1> 
  <p>Saša Oljača - ICBL 2019</p> 
  
  </div>

  <div class="container-fluid">
    <form>

<input type = "number" name="num1" placeholder="Broj 1"><br>
<input type = "number" name="num2" placeholder="Broj 2">
<select name="operator">

<option>Prazno</option>
<option>Saberi</option>
<option>Oduzmi</option>
<option>Pomnoži</option>
<option>Podijeli</option>

</select>

<br><br>
<button type="submit" name="submit" value="submit">Izračunaj</button><br><br>

<h4>Rezultat je: </h4> 
<h3>
<?php 
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case "Prazno":
            echo "<u>Unesite podatke!</u>";
            break;

            case "Saberi":
            echo $result1 + $result2;
            break;

            case "Oduzmi":
            echo $result1 - $result2;
            break;

            case "Pomnoži":
            echo $result1 * $result2;
            break;

            case "Podijeli":
            echo $result1 / $result2;
            break;

        }
}
?></h3>

</div>








</body>
</html>