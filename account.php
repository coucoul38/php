<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php 
    $title = "Account";
    require "components/head.php"; 
    ?>
  </head>
  <body>
    <?php require "components/navbar.php"; 
    require "cfg/config.php"?>
    <h1 class="title center">Mon compte</h1>
    <?php if(!isset($_SESSION['user'])){ //Si l'utilisateur n'est pas connecté ?>
      <div class="row">
      <div class="col s12 m6 offset-m3">
        <div class="card cyan darken-4">
          <div class="card-content white-text">
            <div class="card-title">
              <?php if(isset($_GET['id']) && $_GET['id']=="login"){
                echo "Se connecter";
              }
              else{
                echo "Créer un compte";
              }?>
            </div>
            <p>
              <?php if(isset($_GET['id']) && $_GET['id']=="login"){
                echo "<form method=\"post\" action=\"actions/login.php\">
                <input type='text' name='email' placeholder=\"Adresse mail\" class=\"white-text\">
                <input type='password' name='password' placeholder=\"Mot de passe\" class=\"white-text\">
                <input type='submit' name='login' value='Se connecter'>
            </form>";
              }
              else{
                echo "<form method=\"post\" action=\"actions/signup.php\">
                <input type='text' name='username' placeholder=\"Pseudonyme\" class=\"white-text\">
                <input type='email' name='email' placeholder=\"Email\" class=\"white-text\">
                <input type='password' name='password' placeholder=\"Mot de passe\" class=\"white-text\">
                <input type='submit' name='signup' value='Créer le compte'>
            </form>";
              }?>
            </p>
          </div>
          <div class="card-action">
            <?php if(isset($_GET['id']) && $_GET['id']=="login"){
                echo "<a href=\"account.php?id=signup\">Pas de compte ? Créer un compte</a>";
              }
              else{
                echo "<a href=\"account.php?id=login\">Vous avez un compte ? Se connecter</a>";
              }?></a>
          </div>
        </div>
      </div>
    </div>
    <?php 
      if(isset($_SESSION['error'])){
        echo "<h4 class=\"red center-align\">".$_SESSION['error']."</h4>";
        unset($_SESSION['error']);
        unset($_SESSION['user']);
      }
    } 
    //Si l'utilisateur est connecté
    else{
        echo "Bienvenue ".$_SESSION['user']['username'];
        echo "<form method='post' action=\"actions/logout.php\">
        <input type='submit' name='logout' value='Se déconnecter'>
        </form>";
        if($_SESSION['user']['admin']==1){
          echo "Vous êtes admin!";
          echo "<form method='post' action=\"admin.php?id=users\">
            <input type='submit' name='adminPanel' value='Pannel admin'>
          </form>";
        }
    }
    ?>
    
    <?php require "components/footer.php" ?>
    </body>
</html>
