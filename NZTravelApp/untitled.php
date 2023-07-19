
<?php

session_start();


    require_once "connection.php";
     
     $polacz = @new mysqli($host, $userdb, $passdb, $db);
     
     if($polacz->connect_errno!=0)
     {
     echo "ERROR: ".$polacz->connect_errno;
     }
     else
     {
       
    $nuser= trim($_POST['nuser']);
    $anpass= trim($_POST['npass']);
    $npass=md5($anpass);
   $sql = "SELECT *  FROM admins WHERE login='$nuser' AND pass='$npass'";
    if((empty($nuser))&&(empty($npass)))
    {
        $_SESSION['err'] = 'true';
        header('Location: nuser.php');
    }
    else{

    
    if($result = @$polacz->query($sql))
    {
        $how = $result->num_rows;
        if($how==0)
        {
         
            $crt = "INSERT INTO admins ( `login`, `pass`,`admin`) VALUES
                ( '$nuser', '$npass','no');";
               $polacz->query($crt);
                $_SESSION['logged'] = true;

                $clt="SELECT *  FROM admins WHERE login='$nuser' AND pass='$npass'";

                $ult= @$polacz->query($clt);
                $line = $ult->fetch_assoc();
                $_SESSION['id'] = $line['id'];
                $_SESSION['uses'] = $line['login'];
                $_SESSION['admin'] = $line['admin'];
                $_SESSION['admin'] = false;
                $result->free_result();

                header('Location:Main.php');
            
                
                $_SESSION['err']='false';
        }
        else{  $_SESSION['err'] = 'true';
        header('Location: nuser.php');
     }
   }
     $polacz->close();
     }
}
    ?>



   