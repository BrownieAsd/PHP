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
  <img height="7%" class="logo" src="galeria/nz.jpg" alt="logo" />
  </figure>
  <a href="Main.php" class="menu">Strona Główna</a>
  <a href="NI.php" class="menu">Północna Wyspa</a>
<a href="SI.php" class="menu">Południowa Wyspa</a>
<?php
  echo '<a href="User.php" class="menu">'.$_SESSION['uses'].'</a>';
  echo '<a href="logout.php" class="menu">Wyloguj</a>';
  $x=$_SESSION['uses'];
?>
 

  </header>
  
  
 <section class="welcomeA"  >
  <h1>Archipelag Wysp Auckland</h1>
  <h3>Odwiedź Archipelag Wysp Auckland</h3>
  <p> Siedemset dwadzieściapięć kilometrów (450mil) na południe od Nowej Zelandii, Archipelag Wysp Auckland są odizolowane na południowym pacyfiku i ostatnim miejscem postoju przed wyprawami na Antarktyde. Mają bogatą faune i flore, oraz fascynujące ślady w próbach osiedlenia tych wysep.</p><figure>
<img src="galeria/aiai.png" width="258" height="145.125"  alt="seaside" align="right"/>
</figure>

<p>Archipelag pokrywa około 570km^2 (220mil^2). Jest ich wiele, lecz największa posiada 39km (24mil) w długości oraz 40km ( 25mil) w szerokości. Inne wyspy to Wyspa Adama na południe, Wyspy Enderby i Rose na pólnoc od głównej wyspy. Wszystkie wyspy były początkowo wyspami wulkanicznymi i charakteryzują się wysokimi klifami z wielkimi jaskiniami morskimi na zachodzie i południu. Na wschodzie możemy zauważyć głębokie fjordy. Średnio pada 27 dni miesięcznie, wiatr często przekracza 60 km na godzine, a temperatury rzadko przekraczają 15°C (59F).</p>


<p>Najlepszy czas by odwiedzić:</p>
<table align="center" >
<tr>
	<th>Pora roku</th>
	<th>Śr. Opady</th>
	<th>Śr. Temperatura</th>
</tr>
<tr>
	<td>Jesień</td>
	<td>8.3 &#8451;</td>
	<td>83mm</td>
</tr>
<tr>
<td>Zima</td>
<td>6.8 &#8451;</td>
<td>68mm</td>
</tr>
<tr>
<td>Wiosna</td>
<td>7 &#8451;</td>
<td>77.7mm</td>
</tr>
<tr>
<td>Lato</td>
<td>9.3 &#8451;</td>
<td>77mm</td>
</tr>
</table>
&#8618;<a href="https://www.heritage-expeditions.com/destination/auckland-islands/">Archipelag Wysp Auckland</a>
  </section>
  
  <footer>
  <p class="kok" >&#169 2020 NZTravel.co.nz</p>
  </footer>
  
  </body>
  </html>