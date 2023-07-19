
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
    $login= trim($_POST['login']);
    $pass= trim($_POST['pass']);
    $pass=md5($pass);
    
    $sql = "SELECT *  FROM admins WHERE login='$login' AND pass='$pass'";
   
     
     if($result = @$polacz->query($sql))
     {
     $how_many = $result->num_rows;
     if($how_many>0)
     {
        $_SESSION['logged'] = true;

     $line = $result->fetch_assoc();
     $_SESSION['id'] = $line['id'];
     $_SESSION['uses'] = $line['login'];
     $_SESSION['admin'] =$line['admin'];
     if($_SESSION['admin']=="yes"){
        $_SESSION['admin']=true;
     }
     else{
        $_SESSION['admin']=false;
     }
     
     $result->free_result();

         header('Location:Main.php');
       
     $_SESSION['err']='false';
     }else{
        $_SESSION['err'] = 'true';
        header('Location: index.php');
     }

     }

     $polacz->close();
     }

?>