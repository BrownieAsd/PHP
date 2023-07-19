
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
  <img height="7%"  class="logo" src="galeria/nz.jpg" alt="logo" />
  </figure>
  
<a href="Main.php" class="menu">Strona Główna</a>
<a href="NI.php" class="menu">Północna Wyspa</a>
<a href="AI.php" class="menu">Archipelag Wysp Auckland</a>
<?php
  echo '<a href="User.php" class="menu">'.$_SESSION['uses'].'</a>';
  echo '<a href="logout.php" class="menu">Wyloguj</a>';
  $x=$_SESSION['uses'];
?>


</header>
 <section class="welcomeS">
  <h1>Południowa Wyspa</h1>
  <p>
Południowa wyspa, posiada mnóstwo różnorodności jeśli chodzi o atrakcje, znane na całym świecie wina pochodzą właśnie z niej. Pełna dolin polodowcowych w których można skakać na bungee lub spływać kajakiem po rzekach.</p>
  <h2>Najpopularniejsze atrakcje:</H2>
<ul><figure>
<img src="galeria/queen.jpg" width="258" height="145.125"  alt="tower" align="right"/>
</figure>
<li>Góra Cook'a</li>
 <dl>
<dd>-Najwyższa góra w Nowej zelandii, jest często pokryta śniegiem. Ale nawet gdy jest pokryta śniegiem, wciąż nadaje się do wspinaczki.</dd>
</dl>
<li>Christchurch</li>
<dl>
<dd>-Sławne przez swoje tory, posiada piękną stacje kolejową, oraz jak większość miast na południu wspaniały widok na alpy południowe.</dd>
</dl>
<li>Narodowy park Fiordland</li>
<dl>

<dd>-Narodowy park Fiordland znajduje się na południowym zachodzie południowej wyspy. Słynie ze swoich pokrytych lodem fjrodów z Doubtful i Milford sounds.</dd>
</dl>
<li>Dunedin</li>
<dl>

<dd>-Dunedin to miasto w Nowej Zelandii, na wschodnim wybrzeżu Wyspy Południowej, nad Zatoką Otago. Znajduje się tam Baldwin Street, najbardziej stroma ulica świata o nachyleniu do 38 stopni. W mieście znajduje się cerkiew św. Michała Archanioła. Jest to drugie największe miasto na południowej wyspie w Nowej Zelandii.</dd>
</dl>
<li>Zamek  Larnach</li>
<dl>
<dd>-Zamek Larnach to sztuczny zamek na grzbiecie półwyspu Otago w granicach miasta Dunedin w Nowej Zelandii, w pobliżu małej osady Pukehiki. Jest to jeden z niewielu budowli tego rozmiaru w Nowej Zelandii.</dd>
</dl>
<li>Queenstown</li>
<dl>
<dd>Queenstown, Nowa Zelandia, drugie pod względem liczby ludności miasto w całej Nowej Zelandii. Położone na wschodnim wybrzeżu Wyspy południowej, jest stolicą regionu Canterbury. Znajduje się na wybrzeżach jeziora Wakatipu, Jest otoczone wielkimi górami alp południowych. Słynie ze swoich sportów ekstremalnych, regionalnych winiarni  oraz historycznych wiosek górniczych. Znajduje się tam most nad wąwozem Kawarau z którego można skakać na bungee. </dd>
</dl>
</ul>



  &#8618;<a href="https://www.newzealand.com/au/south-island/">Atrakcje Południowej wyspy</a>
  </section>
  <footer>
  <p class="kok" >&#169 2020 NZTravel.co.nz</p>
  </footer>
  </body>
  </html>
