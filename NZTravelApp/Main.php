<?php
  session_start();

if(!isset($_SESSION['logged']))
{
  header('Location: index.php');
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
  <img height="7%" class="logo" class="menu" src="galeria/nz.jpg" alt="logo"  />
  </figure>
<a href="NI.php" class="menu">Północna Wyspa</a>
<a href="SI.php" class="menu">Południowa Wyspa</a>
<a href="AI.php" class="menu">Archipelag Wysp Auckland</a>
<a href="Gallery.php" class="menu">Galeria</a>
<?php
  echo '<a href="User.php" class="menu">'.$_SESSION['uses'].'</a>';
  echo '<a href="logout.php" class="menu">Wyloguj</a>';
  $x=$_SESSION['uses'];
?>
  

  </header>
<section class="welcome" style="height:100vh;left:0%">
	
	<figure>
	<img width="100%" src="galeria/header.jpg" alt="header"  class="pic" />
	</figure>
		
<?php
    // Turn off all error reporting
    error_reporting(0);
    ?>
	
	 <form class="form" style="width:50%; top:13%; ">


<fieldset style="background-color: white;  ">
    <form method="get" class="form"  >
	<legend>Zainteresowania:   </legend>
	<p>Według nich polecimy wyspę
    <select class="colo"  name="active" method="get">
	<option class="colo" name="jak" value="Hike">Wspinaczka</option>
	<option class="colo" name="jak" value="Swim">Pływanie</option>
	<option class="colo" name="jak" value="Sail">Żeglarstwo</option>
	<option class="colo" name="jak" value="Ski">Narciarstwo</option>
	</select></p>


	<label>Na którą wyspę jesteś nastawiony/nastawiona?</br></label>
	<input  type="radio" name="Island" value="North Island"  />Północna Wyspa</br>
	<input  type="radio" name="Island" value="South Island" />Południowa Wyspa</br>
	<input  type="radio" name="Island" value="Auckland Islands" />Archipelag Wysp Auckland</br>
	<p><input class="colo" type="reset" value="Wyczyść" />
	<input class="colo"  type="submit" value="Prześlij" name="submit" required/></p>
		</br>
</form>
<?php  
  

 $active=$_GET['active'];
		$island=$_GET['Island'];
		switch($island){
            case "North Island":switch($active){
                case "Hike":header("Location: https://www.inafarawayland.com/day-hikes-north-island-new-zealand/");
                break;
                case "Swim":header("Location: https://www.tripadvisor.co.nz/Attractions-g255105-Activities-c61-t52-North_Island.html");
                break;
                case "Sail":header("Location: https://www.tripadvisor.com/Attractions-g255105-Activities-c61-t187-North_Island.html");
                break;
                case "Ski":$message = "Impossible";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                break;
        }
		break;
            case "South Island":switch($active){
                case "Hike":header("Location: https://top10.co.nz/feed/blog/top-10-hikes-in-south-island-new-zealand");
                    break;
                case "Swim":header("Location: https://www.tripadvisor.co.nz/ShowTopic-g255116-i729-k2529294-Beach_Swimming_South_Island-South_Island.html");
                    break;
                case "Sail":header("Location: https://www.tourism.net.nz/region/--south-island/attractions-and-activities/boats--sailing-and-charters");
                    break;
                case "Ski":header("Location: https://www.newzealand.com/au/feature/what-you-need-to-know-about-skiing-in-the-south-island/");
                break;
        }
		break;
            case "Auckland Islands":switch($active){
                case "Hike":$message = "Impossible";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    break;
                case "Swim":header("Location: https://www.aucklandnz.com/visit/discover/beaches");
                    break;
                case "Sail":$message = "Impossible,requires own sailing boat";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    break;
                case "Ski":$message = "Impossible";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    break;
        }
        break;
	}
	?>


	</fieldset>
  
  </section>




  <footer style="z-index: 30">
  <p class="kok" >&#169 2020 NZTravel.co.nz</p>
  </footer>
  </body>
  </html>

