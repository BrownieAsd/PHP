<?php
require('connection.php');

$polacz = @new mysqli($host, $userdb, $passdb, $db);

   if($polacz->connect_errno!=0)
        {
            echo "ERROR: ".$polacz->connect_errno;
        }


$file=$_FILES['myfile']['name'];


$grt="INSERT INTO `zdjecia`(`nazwa`) VALUES ('$file')";
   $polacz->query($grt);
header('Location:adm.php');
?>








