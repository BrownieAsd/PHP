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
	<meta name="Thomas Browne, Zuzanna Bal">
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


			<form  action="hello.php" method="post" class="entry">
				<div>
						Login: </br>
						<input  type="text" name="login"    class="komo" class="input"/>
					</div>
          <div>
						Hasło: </br>
						<input  type="password" name="pass"   class="komo" class="input"/>
					</div>
          <div>
				<input   type="submit"   value="Zaloguj" class="input" class="colo" required/> 
        
      </div>
			 </form> 
       <form action="nuser.php" class="entry" method="post" style="top:40%;">
         <input type="submit" value="Zarejestruj się" class="input" class="colo" name="sign" />
         </form>
         <?php
      if(isset($_POST["sign"]))
      {
      $_SESSION['err']='false';
        }
      ?>
     <?php
      if($_SESSION['err']=='true'){
    
      echo "<script type='text/javascript'>alert('Incorrect username or password!');</script>";
      }
      ?>
       
      

  <footer>
  <p class="kok" >&#169 2020 NZTravel.co.nz</p>
  </footer>
  
  </body>
  </html>
  
  


