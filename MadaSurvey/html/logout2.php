<?php
    session_start();
    //$name=$_SESSION['name'];
		 session_destroy();
     unset($_SESSION['name']);
     $_SESSION['message'] = "Vous êtes désormais déconnecté.";
     echo $_SESSION['message'];
     header("Location: ../index.php");
        //echo '<script type="text/javascript"> alert("Vous êtes désormais déconnecté.")</script>';
    //echo '<script type="text/javascript"> alert("Vous êtes désormais déconnecté.")</script>';
    //include("../index.php");
    //header("Location: ../index.php");
    //echo "Vous êtes désormais déconnecté";
?>
