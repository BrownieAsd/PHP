<?php
  session_start();
  require ('connection.php');

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
	<meta name="Thomas Browne, Zuzanna Bal">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="NZ, NZTravel,NZTravels, NewZealand, New Zealand, Northland, Southland, Auckland" >
    <title>NZTravel.co.nz</title>
	<link href="style/style.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="galeriaStyles.css">
  </head>
  <body>
  <header class="hi">
  <figure>
  <img class="logo" class="menu" height="7%" src="galeria/nz.jpg" alt="logo" />
  </figure>
  
<a href="Main.php" class="menu">Strona Główna</a>
<?php
  echo '<a href="User.php" class="menu">'.$_SESSION['uses'].'</a>';
  echo '<a href="logout.php" class="menu">Wyloguj</a>';
  $x=$_SESSION['uses'];
?>
  


 </header>
 
   <script>
// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
   <br>
 </br>

<p class="tytul" > The Beautiful New Zealand </p>
<?php
    $baza = new mysqli($host, $userdb, $passdb, $db);
    $zapytanie = "SELECT * FROM zdjecia";
    $wynik = $baza->query($zapytanie);
    echo '<div class="row">';
    $licznik = 1;
    while ($row = mysqli_fetch_assoc($wynik)) {
        echo '<div class="column">
                <img src="galeria/'.$row['nazwa'].'" onclick="openModal();currentSlide('.$licznik.')" class="hover-shadow">
                </div>';
        $licznik = $licznik + 1;
    }
    echo '</div>';
?>
    <!-- <div class="row">
  <div class="column">
    <img src="zdjecia/img1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="zdjecia/img2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="zdjecia/img3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="zdjecia/img4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
</div> -->

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

      <?php
      $result = $baza->query($zapytanie);
      $wszystkieWiersze = mysqli_num_rows($result);
      $licznik2 = 1;
      while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="mySlides">
                    <div class="numbertext"> '.$licznik2.' / '.$wszystkieWiersze.'</div>
                    <img src="galeria/'.$row['nazwa'].'" style="width:100%">
                </div>';
            $licznik2 = $licznik2 + 1;
      }
      ?>

    <!-- <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="zdjecia/img1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="zdjecia/img2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="zdjecia/img3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="zdjecia/img4.jpg" style="width:100%">
    </div> -->

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->

    <?php
    $miniaturaWynik = $baza->query($zapytanie);
    $miniaturaLicznik = 1;
    while ($row = mysqli_fetch_assoc($miniaturaWynik)) {
        echo '<div class="column">
                <img class="demo" src="galeria/'.$row['nazwa'].'" onclick="currentSlide('.$miniaturaLicznik.')" alt="New Zealand">
              </div>';
          $miniaturaLicznik = $miniaturaLicznik + 1;
    }
    ?>

    <!-- <div class="column">
      <img class="demo" src="zdjecia/img1.jpg" onclick="currentSlide(1)" alt="California">
    </div>

    <div class="column">
      <img class="demo" src="zdjecia/img2.jpg" onclick="currentSlide(2)" alt="California">
    </div>

    <div class="column">
      <img class="demo" src="zdjecia/img3.jpg" onclick="currentSlide(3)" alt="California">
    </div>

    <div class="column">
      <img class="demo" src="zdjecia/img4.jpg" onclick="currentSlide(4)" alt="California">
    </div> -->
  </div>
</div>



<footer>
  <p class="kok" >&#169 2020 NZTravel.co.nz </p>
  </footer>
  </body>
  </html>



