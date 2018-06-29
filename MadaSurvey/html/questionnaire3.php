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
    <link rel="stylesheet" type="text/css" href="../css/questionnaire.css">
  </head>
  <body>
    <h1>QUESTIONNAIRE POUR EVALUER LA NOTORIETE DES ENTREPRISES PARTICIPANTS AU CONCOURS "MEILLEURES ENTREPRISES DE L'ANNEE"</h1>

		<h2><u>Troisième catégorie : Les entreprises ayant moins de 100 salariés</u></h2>

		<h3>Q1 : Innovation</h3>

		<p>
			Veuillez nommer et classer de 1 à 3(du plus au moins innovant), les 3 premières Entreprises les plus innovantes ou développant
			des technologies ou des produits les plus innovants dans leur secteur d'activité respectif
		</p>

    <div class ="container-fluid container question">
        <div class = "container-fluid liste" id="gauche">
          <h6><strong><u>LISTE DES ENTREPRISES</u></strong></h6>
          <h6>Jiro sy rano Malagasy</6>
          <h6>JOVENNA Madagascar</h6>
          <h6>TELMA Madagascar</h6>
          <h6>Brasserie Star Madagasacar</h6>
          <h6>Colas Madagascar S,A</h6>
        </div>

        <div class = " checkboxList" id="droite">
          <div class="check">
            <div class="CHECK_BOX_TITLE ">
              <h6>1</h6>
              <h6>2</h6>
              <h6>3</h6>
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first1_11">
              <input type = "radio" class="radio" name="radio2Q1" value="second1_12">
              <input type = "radio" class="radio" name="radio3Q1" value="third1_13">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first1_21">
              <input type = "radio" class="radio" name="radio2Q1" value="second1_22">
              <input type = "radio" class="radio" name="radio3Q1" value="third1_23">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first1_31">
              <input type = "radio" class="radio" name="radio2Q1" value="second1_32">
              <input type = "radio" class="radio" name="radio3Q1" value="third1_33">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first1_41">
              <input type = "radio" class="radio" name="radio2Q1" value="second1_42">
              <input type = "radio" class="radio" name="radio3Q1" value="third1_43">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first1_51">
              <input type = "radio" class="radio" name="radio2Q1" value="second1_52">
              <input type = "radio" class="radio" name="radio3Q1" value="third1_53">
            </div>
          </div>

        </div>
      </div>


		<h3>Q2: Rapport qualité / prix</h3>

		<p>
			Veuillez nommer et classer de 1 à 3, les 3 premières entreprises adoptant les meilleurs rapport qualité/prix de leurs produits et services
		<p/>
    <div class ="container-fluid container question">
        <div class = "container-fluid liste" id="gauche">
          <h6><strong><u>LISTE DES ENTREPRISES</u></strong></h6>
          <h6>Jiro sy rano Malagasy</6>
          <h6>JOVENNA Madagascar</h6>
          <h6>TELMA Madagascar</h6>
          <h6>Brasserie Star Madagasacar</h6>
          <h6>Colas Madagascar S,A</h6>
        </div>

        <div class = " checkboxList" id="droite">
          <div class="check">
            <div class="CHECK_BOX_TITLE ">
              <h6>1</h6>
              <h6>2</h6>
              <h6>3</h6>
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first2_11">
              <input type = "radio" class="radio" name="radio2Q1" value="second2_12">
              <input type = "radio" class="radio" name="radio3Q1" value="third2_13">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first2_21">
              <input type = "radio" class="radio" name="radio2Q1" value="second2_22">
              <input type = "radio" class="radio" name="radio3Q1" value="third2_23">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first2_31">
              <input type = "radio" class="radio" name="radio2Q1" value="second2_32">
              <input type = "radio" class="radio" name="radio3Q1" value="third2_33">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first2_41">
              <input type = "radio" class="radio" name="radio2Q1" value="second2_42">
              <input type = "radio" class="radio" name="radio3Q1" value="third2_43">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first2_51">
              <input type = "radio" class="radio" name="radio2Q1" value="second2_52">
              <input type = "radio" class="radio" name="radio3Q1" value="third2_53">
            </div>
          </div>

        </div>
      </div>

		<h3>Q3: Marketing</h3>

		<p>
			Veuillez nommer et classer de 1 à 3, les 3 premières entreprises les plus réactives, les plus disponible et les mieux organisées dans la vente de leurs produits et de leurs services
		<p/>
    <div class ="container-fluid container question">
        <div class = "container-fluid liste" id="gauche">
          <h6><strong><u>LISTE DES ENTREPRISES</u></strong></h6>
          <h6>Jiro sy rano Malagasy</6>
          <h6>JOVENNA Madagascar</h6>
          <h6>TELMA Madagascar</h6>
          <h6>Brasserie Star Madagasacar</h6>
          <h6>Colas Madagascar S,A</h6>
        </div>

        <div class = " checkboxList" id="droite">
          <div class="check">
            <div class="CHECK_BOX_TITLE ">
              <h6>1</h6>
              <h6>2</h6>
              <h6>3</h6>
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first3_11">
              <input type = "radio" class="radio" name="radio2Q1" value="second3_12">
              <input type = "radio" class="radio" name="radio3Q1" value="third3_13">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first3_21">
              <input type = "radio" class="radio" name="radio2Q1" value="second3_22">
              <input type = "radio" class="radio" name="radio3Q1" value="third3_23">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first3_31">
              <input type = "radio" class="radio" name="radio2Q1" value="second3_32">
              <input type = "radio" class="radio" name="radio3Q1" value="third3_33">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first3_41">
              <input type = "radio" class="radio" name="radio2Q1" value="second3_42">
              <input type = "radio" class="radio" name="radio3Q1" value="third3_43">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first3_51">
              <input type = "radio" class="radio" name="radio2Q1" value="second3_52">
              <input type = "radio" class="radio" name="radio3Q1" value="third3_53">
            </div>
          </div>

        </div>
      </div>

		<h3>Q4: Relation clients</h3>
		<p>
			Veuillez nommer et classer de 1 à 3, les 3 premières entreprises ayant des relations efficaces, privilégiées, et satisfaisantes avec ses clients
		<p/>

    <div class ="container-fluid container question">
        <div class = "container-fluid liste" id="gauche">
          <h6><strong><u>LISTE DES ENTREPRISES</u></strong></h6>
          <h6>Jiro sy rano Malagasy</6>
          <h6>JOVENNA Madagascar</h6>
          <h6>TELMA Madagascar</h6>
          <h6>Brasserie Star Madagasacar</h6>
          <h6>Colas Madagascar S,A</h6>
        </div>

        <div class = " checkboxList" id="droite">
          <div class="check">
            <div class="CHECK_BOX_TITLE ">
              <h6>1</h6>
              <h6>2</h6>
              <h6>3</h6>
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first4_11">
              <input type = "radio" class="radio" name="radio2Q1" value="second4_12">
              <input type = "radio" class="radio" name="radio3Q1" value="third4_13">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first4_21">
              <input type = "radio" class="radio" name="radio2Q1" value="second4_22">
              <input type = "radio" class="radio" name="radio3Q1" value="third4_23">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first4_31">
              <input type = "radio" class="radio" name="radio2Q1" value="second4_32">
              <input type = "radio" class="radio" name="radio3Q1" value="third4_33">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first4_41">
              <input type = "radio" class="radio" name="radio2Q1" value="second4_42">
              <input type = "radio" class="radio" name="radio3Q1" value="third4_43">
            </div>
            <div class="CHECK_BOX">
              <input type = "radio" class="radio" name="radio1Q1" value="first4_51">
              <input type = "radio" class="radio" name="radio2Q1" value="second4_52">
              <input type = "radio" class="radio" name="radio3Q1" value="third4_53">
            </div>
          </div>

        </div>
      </div>

              <h3>Q5 : Politique sociale / environnementale</h3>
              <p>
                Veuillez nommer et classer de 1 à 3, les 3 premières entreprises adoptant les meilleures politiques environnementales, et les mieux intégrés au sein des communautés et ou des sociétés au sein desquelles elles développent leurs activités
                <p/>
                <div class ="container-fluid container question">
                    <div class = "container-fluid liste" id="gauche">
                      <h6><strong><u>LISTE DES ENTREPRISES</u></strong></h6>
                      <h6>Jiro sy rano Malagasy</6>
                      <h6>JOVENNA Madagascar</h6>
                      <h6>TELMA Madagascar</h6>
                      <h6>Brasserie Star Madagasacar</h6>
                      <h6>Colas Madagascar S,A</h6>
                    </div>

                    <div class = " checkboxList" id="droite">
                      <div class="check">
                        <div class="CHECK_BOX_TITLE ">
                          <h6>1</h6>
                          <h6>2</h6>
                          <h6>3</h6>
                        </div>
                        <div class="CHECK_BOX">
                          <input type = "radio" class="radio" name="radio1Q1" value="first5_11">
                          <input type = "radio" class="radio" name="radio2Q1" value="second5_12">
                          <input type = "radio" class="radio" name="radio3Q1" value="third5_13">
                        </div>
                        <div class="CHECK_BOX">
                          <input type = "radio" class="radio" name="radio1Q1" value="first5_21">
                          <input type = "radio" class="radio" name="radio2Q1" value="second5_22">
                          <input type = "radio" class="radio" name="radio3Q1" value="third5_23">
                        </div>
                        <div class="CHECK_BOX">
                          <input type = "radio" class="radio" name="radio1Q1" value="first5_31">
                          <input type = "radio" class="radio" name="radio2Q1" value="second5_32">
                          <input type = "radio" class="radio" name="radio3Q1" value="third5_33">
                        </div>
                        <div class="CHECK_BOX">
                          <input type = "radio" class="radio" name="radio1Q1" value="first5_41">
                          <input type = "radio" class="radio" name="radio2Q1" value="second5_42">
                          <input type = "radio" class="radio" name="radio3Q1" value="third5_43">
                        </div>
                        <div class="CHECK_BOX">
                          <input type = "radio" class="radio" name="radio1Q1" value="first5_51">
                          <input type = "radio" class="radio" name="radio2Q1" value="second5_52">
                          <input type = "radio" class="radio" name="radio3Q1" value="third5_53">
                        </div>
                      </div>

                    </div>
                  </div>

    <form action="Up_to_Database.php" method="post">
      <?php
        include 'Up_to_Database.php';
      ?>
      <input type="submit" name="btn_terminer" value="Terminer" class="suivant">
    </form>


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
