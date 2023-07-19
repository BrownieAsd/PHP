<?php

require_once "connection.php";
        
        $polacz = @new mysqli($host, $userdb, $passdb, $db);
        if($polacz->connect_errno!=0)
        {
            echo "ERROR: ".$polacz->connect_errno;
        }
       
        $ptitle=$_POST['title'];
        $ptext=$_POST['tekst'];
        $date =date('Y/m/d');
        
        
        
       
        $srt = "INSERT INTO news ( `text`, `dat`,`title`) VALUES
        ( '$ptext', '$date','$ptitle')";
        $polacz->query($srt);
        
        
       

    
    header('Location: adm.php');


?>
