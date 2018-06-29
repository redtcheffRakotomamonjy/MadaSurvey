<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'data_mada_survey';

$conn = new mysqli ($host,$user,$password,$dbname);
$requette = '';
if (!empty($_POST['radio1Q1']))
{
  $result = $_POST['radio1Q1'];
}


  if (isset($_POST['btn_suivant'])) {
    if ($result=="first1_11"){
       echo 'voalohany';
    }
    elseif ($result=="first1_21") {
      echo "faharoa";
    }
    elseif ($result=="first1_31") {
      echo "fahatelo";
    }
    elseif ($result=="first1_41") {
      echo "faha4";
    }
    elseif ($result=="first1_51") {
      echo "fahadimy";
    }
    //header("Location: questionnaire2.php") ;
  }
 ?>
