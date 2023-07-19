<?php
session_start();
 error_reporting(0);
if((isset($_SESSION['logged'])) && ($_SESSION['logged']==true))
{
  header('Location: Main.php');
  exit();
}

?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8"> 
	<meta name="NZTravels">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="Thomas Browne">
	<meta name="22.03.2018">
	<meta name="NZ, NZTravel,NZTravels, NewZealand, New Zealand, Northland, Southland, Auckland" >
    <title>NZTravel.co.nz</title>
	<link href="style/style.css" type="text/css" rel="stylesheet"/>
	
  </head>
  <body>
  <header class="hi">
  <figure>
  <img height="7%" class="logo" src="galeria/nz.jpg" alt="logo" />
  </figure>



  </header>


			<form  action="untitled.php" method="post" class="entry">
				<div>
						Login: </br>
						<input  type="text" name="nuser"   class="komo" class="input" required />
					</div>
          <div>
						Hasło: </br>
						<input  type="password" name="npass"   class="komo" class="input" required />
					</div>
          <div>
				<input   type="submit"   value="Zarejestruj się" class="input" class="colo"/> 
        
      </div>
			 </form> 
			 <form action="index.php" class="entry" method="post" style="top:40%;">
         <input type="submit" value="Powrót do login" name="return" class="input" class="colo" />
         </form>
         <?php
			if(isset($_POST["return"]))
			{
			$_SESSION['err']='false';
 
				}
			?>
      <?php
      if($_SESSION['err']=='true'){
    
      echo "<script type='text/javascript'>alert('Login lub hasło zajęte!');</script>";
      }
      ?>
       
      

  <footer>
  <p class="kok" >&#169 2020 NZTravel.co.nz</p>
  </footer>
  
  </body>
  </html>
  
  


