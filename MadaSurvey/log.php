<?php

  $host="localhost";
  $user="root";
  $password="";
  $db="madasurvey";

  $conn = new mysqli ($host,$user,$password,$db);
  if (isset($_SESSION['message'])) {
    echo "<div id = error_msg>".$_SESSION['message']."</div>";
    unset($_SESSION['message']) ;
  }
  if(isset($_POST['login'])){
    $nom=$_POST['nom'];
    $mdp=$_POST['pass'];
    $res=$conn->query("select * from utilisateur where nom='".$nom."'AND password='".$mdp."' limit 1");
    $nbr = $res->num_rows;

    if ($nbr==1){
      session_start();
      $_SESSION['name']=$_POST['nom'];
      header ("Location: html/questionnaire.php");
      //echo "Vous êtes connecté";
      exit();
    }
    else{
       echo '<script type="text/javascript"> alert("mot de passe erroné")</script>';
    }
  }
?>
