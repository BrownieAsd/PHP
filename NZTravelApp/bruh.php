<?php 

$plik = fopen("accounts.txt", "a");


fwrite($plik, $_POST["nazwisko"]);
fwrite($plik, "\n");
fwrite($plik, $_POST["email"]);
fwrite($plik, "\n");
fwrite($plik, $_POST["date"]);
fwrite($plik, "\n");

fclose($plik);


header("Location: User.php");
?>
