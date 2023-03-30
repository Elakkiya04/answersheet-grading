<?php
    session_start();
    if(isset($_POST['login']))
    {
        $_SESSION['uname']=$_POST['uname'];
        $_SESSION['pwd']=$_POST['pwd'];
    }
    session_destroy();
    header("Location: index.php");
    
?>