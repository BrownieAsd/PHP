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
<a href="SI.php" class="menu">Południowa Wyspa</a>
<a href="AI.php" class="menu">Archipelag Wysp Auckland</a>
<?php
  echo '<a href="User.php" class="menu">'.$_SESSION['uses'].'</a>';
  echo '<a href="logout.php" class="menu">Wyloguj</a>';
  $x=$_SESSION['uses'];
?>


  </header>
  <section class="welcomeN">
  <h1>Północna Wyspa</h1>
  <h3>

Aktywne wulkany i tropikalne lasy północnej wyspy.

<h2>Najpopularniejsze atrakcje:</H2>
<ul><figure>
<img src="galeria/skytower.jpg" alt="sky tower" align="right" />
</figure>

<li>Rotorua</li>
<dl>
<dd>-Rotorua jest pełna gejzerów, jest to coś, co każdy powinien zobaczyć, jest mnóstwo gorących źródeł oraz atrakcji w tym górzystym regionie!</dd>
</dl>
<li>Zatoka wysp</li>
<dl>
<dd>-Zatoka pełna, zielonych i nie zamieszkanych wysp to idealne miejsce do żeglarstwa i łowienia ryb.</dd>
</dl>
<li>New Zealand Maritime Museum</li>
<dl>
<dd>-W oceanarium znajdującym się w Auckland, można zobaczyć wszystkie morskie zwierzęta Nowej Zelandii </dd>
</dl>
<li>Auckland</li>
<dl>
<dd>-Największe miasto Nowej Zelandii jest pełne atrakcji turystycznych, barów oraz restauracji</dd>
</dl>
<li>Wellington</li>
<dl>
<dd>-Stolica Nowej Zelandii, posiada promednade nadmorską, piaszczyste plaże oraz mnóstwo kolorowych drewnianych domków</dd>
</dl>
<li>Przylądek Reinga</li>
<dl>
<dd>-Przylądek na czóbku Nowej Zelandii, znajduje się na granicy morza Tasmańskiego i Oceanu Spokojnego. Znajduje się tam stara latarnia morska która działa od 1941roku.</dd>
</dl>

&#8618; <a href="https://www.newzealand.com/au/north-island/">Atrakcje wyspy północnej</a>
 </ul> </section>
  <footer>
  <p class="kok" >&#169 2020 NZTravel.co.nz</p>
  </footer>
  
  </body>
  </html>
  
  


