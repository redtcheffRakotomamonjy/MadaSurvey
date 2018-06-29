<?php
  session_start();
  $name=$_SESSION['name'];
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Questionnaire</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/fond.css">
    <link rel="stylesheet" type="text/css" href="../css/final.css">
  </head>

  <body>

    <div class="paneau">
      <p>
        <h2> L'équipe de <strong> MADA Survey </strong> vous remercie de votre particiption. A bientôt </h2>
      </p>
    </div>
    <footer class="footer row mt-5 footer">
      <div class="container mt-5">
        <div class="row ">
          <div class="col-md-12 mt-5 text-center">
            <h1 class="footH1">MADA Survey</h1>
            <h4>Merci de votre collaboration <?php echo $name; ?></h4>
          </div>
          <div class="col-md-12 text-center mt-5">
              <a href="logout2.php">Déconnexion</a>
            <h6 class="">copyright 2018 ISPM </h6>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
