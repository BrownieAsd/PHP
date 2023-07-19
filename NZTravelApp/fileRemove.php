<?php
require('connection.php');

$polacz = @new mysqli($host, $userdb, $passdb, $db);

   if($polacz->connect_errno!=0)
        {
            echo "ERROR: ".$polacz->connect_errno;
        }


$file=$_FILES['myfile']['name'];
$delz=$_POST['boiz'];

$grtz="DELETE FROM zdjecia WHERE nazwa='$delz'";
   $polacz->query($grtz);
header('Location:adm.php');
?>





