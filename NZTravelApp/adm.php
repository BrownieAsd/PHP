<?php
  session_start();
  error_reporting(0);
    if((isset($_SESSION['logged'])) && ($_SESSION['logged']!=true))
    {
        header('Location: index.php');
        exit();
    }

if(($_SESSION['admin']==false))
{
  header('Location: User.php');
  exit();

}
require_once "connection.php";
        
        $polacz = @new mysqli($host, $userdb, $passdb, $db);
        if($polacz->connect_errno!=0)
        {
            echo "ERROR: ".$polacz->connect_errno;
        }


    $b = "SELECT * FROM news";
    $result = mysqli_query($polacz, $b) or die("ERROR!");

     $f = "SELECT * FROM news";
    $resultx = mysqli_query($polacz, $f) or die("ERROR!");
        ?>


<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8"> 
	<meta name="NZTravels">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="Thomas Browne, Zuzanna Bal">
	<meta name="NZ, NZTravel,NZTravels, NewZealand, New Zealand, Northland, Southland, Auckland" >
    <title>NZTravel.co.nz</title>
	<link href="style/style.css" type="text/css" rel="stylesheet"/>

  </head>
  <body>
   <header class="hi">
  <figure>
  <img height="7%" class="logo" class="menu" src="galeria/nz.jpg" alt="logo" />
  </figure>
<a href="Main.php" class="menu">Strona Główna</a>
<a href="NI.php" class="menu">Północna Wyspa</a>
<a href="SI.php" class="menu">Południowa Wyspa</a>
<a href="AI.php" class="menu">Archipelag Wysp Auckland</a>
<a href="Gallery.php" class="menu">Galeria</a>
<a href="logout.php" class="menu">Wyloguj</a>

  


  </header>


  

<form action="brach.php" class="form" method="POST">
	 <fieldset  style="background-color: white;font-family:Helvetica ;">
  <legend class="font">Dane Osobiste: </legend>
  <h3>Proszę wypełnić formularz</h3>
  <p>Ostatnie nazwisko:<input class=" komo" type="text" name="nazwisko" size="15" maxlength="25"></p>
  <p>Email:<input class=" komo" type="email" name="email" size="15" maxlength="45" ></p>
 
<p>Data urodzenia:<input class="colo" type="Date" name="date" size="15" maxlength="20"></p>
<input   type="submit"   value="Prześlij" class="input" class="colo" required/>


</br>








</fieldset>



<form class="form" method="post" action="fileUpload.php" style="top:165%" enctype="multipart/form-data">
   <fieldset  style="background-color: white;font-family:Helvetica ;">
    <legend class="font">Dodaj Zdjęcie</legend>
<input type="file" name="myfile" id="fileToUpload">
    <input type="submit" value="Prześlij zdjęcie" name="upload"/>

</form>

</fieldset>
  <footer style="z-index: 30;">
  <p class="kok" >&#169 2020 NZTravel.co.nz</p>
  </footer>

  </body>
  </html>





