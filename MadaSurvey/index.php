
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fond.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
  </head>

  <body >
      <?php
        
        include 'log.php';
      ?>

      <div id="container">

        <h1>Authentification</h1>

        <form method="post" action="#">

          <input type="text" name="nom"  placeholder="Nom d'utilisateur">
          <input type="password" name="pass"  placeholder="Mot de passe">

          <input type="submit" name="login" value="Se connecter" class="btn-login">
          <!---<a href="#">Log in</a>-->
          <div id="remember-container">
            <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
            <span id="remember">Se souvenir de moi</span>
            <span id="forgotten">Mot de passe oublié</span>
          </div>
      </form>
      </div>
      <!-- Forgotten Password Container -->
      <div id="forgotten-container">
         <h1>Forgotten</h1>
        <span class="close-btn">
          <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
        </span>

        <form>
          <input type="email" name="email" placeholder="E-mail">
          <a href="#" class="orange-btn">Get new password</a>
      </form>
      <script>
          $('#login-button').click(function(){
        $('#login-button').fadeOut("slow",function(){
          $("#container").fadeIn();
          TweenMax.from("#container", .4, { scale: 0, ease:Sine.easeInOut});
          TweenMax.to("#container", .4, { scale: 1, ease:Sine.easeInOut});
        });
      });

      $(".close-btn").click(function(){
        TweenMax.from("#container", .4, { scale: 1, ease:Sine.easeInOut});
        TweenMax.to("#container", .4, { left:"0px", scale: 0, ease:Sine.easeInOut});
        $("#container, #forgotten-container").fadeOut(800, function(){
          $("#login-button").fadeIn(800);
        });
      });

      /* Forgotten Password */
      $('#forgotten').click(function(){
        $("#container").fadeOut(function(){
          $("#forgotten-container").fadeIn();
        });
      });
      </script>
      </div>
    <header class="head">

    </header>
  </body>
</html>
