<?php
  session_start();
if(($_SESSION['admin']==true))
{
  header('Location: adm.php');
  exit();
}
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

  

  

<form action="bruh.php" class="form" method="POST" style="top:70%;">
		<fieldset  style="background-color: white; ">
  <legend class="font">Dane Osobiste:</legend>
  <h3>Prosimy wypełnić formularz w celach kontaktowych</h3>
  <p>Nazwisko:<input class=" komo" type="text" name="nazwisko" size="15" maxlength="25"></p>
  <p>Email:<input class=" komo" type="email" name="email" size="15" maxlength="45"></p>
 
<p>Data urodzenia:<input class="colo" type="Date" name="date" size="15" maxlength="20"></p>
<input   type="submit"   value="Prześlij" class="input" class="colo"/> 

  </fieldset>
</form>

  <footer style="z-index: 30;">
  <p class="kok" >&#169 2020 NZTravel.co.nz</p>
  </footer>
  
  </body>
  </html>
  