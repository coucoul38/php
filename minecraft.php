<!DOCTYPE html>
  <html lang="fr">
    <head>
      <?php 
      $title = "Projet Minecraft serveur privé";
      require "components/head.php"; 
      ?>
    </head>
   
    <body>
      <?php require "components/navbar.php"; ?>
      <h1 class="center title animate__animated easter_egg_title"> Serveur de mini-jeux Minecraft</h1>
      <audio id="death" src="/audio/scream_disappear.mp3" preload="auto"></audio>
       
        <!--Paralaxe-->
      <div class="parallax-container">
        <div class="parallax"><img src="img/preview_minecraft3.jpg" alt="minecraft"></div>
      </div>

        <div class="row container">
          <div class="col m4 s12">
            <div class="card flow-text">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/training_range_smol.jpg" alt="Minecraft shooting range">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Présentation du serveur</span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Concept<i class="material-icons right hide-on-med-and-down">close</i></span>
                <p>Ce serveur est un serveur de mini-jeux modés.<br>Noham a codé tous les mini-jeux lui même, grace aux commands blocks mis à disposition par le jeu.
                <br><a href="#vmw">Plus d'info sur le système des command blocks</a></p>
              </div>
            </div>
          </div>
          <div class="col m8 s12">
            <h2>Présentation du projet</h2>
            <p class="flow-text">Le projet de ce serveur est de proposer un grand nombre de mini-jeux, dont <a href="#mods">certains utilisent des mods</a>.<br>
            Noham a mis en place ce serveur privé pour le plaisir de créer des jeux et d'y jouer avec des amis ou personnes de l'école.<br>
          Ce n'est pour l'instant qu'un prototype, mais des progrès sont faits chaque semaine pour améliorer les jeux ou en ajouter de nouveaux.</p>
          </div>
        </div>
        
        <h2 class="center">Les différents mini-jeux</h2>
        <div class="row container">
          <div class="col m6 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/tnt_run.jpg" alt="TNT run">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">TNT run<i class="material-icons right hide-on-med-and-down">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">But du jeu : ne pas tomber<i class="material-icons right hide-on-med-and-down">close</i></span>
                <p class="flow-text">Dans le TNT run, les joueurs doivent courrir sur des TNT qui tombent dès qu'ils marchent dessus.
                  <br>Le but est d'être le dernier à tomber.
                </p>
              </div>
            </div>
          </div>

          <div class="col m6 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/de_a_coudre.jpg" alt="Dé à coudre">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Dé à coudre<i class="material-icons right hide-on-med-and-down">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">But du jeu : bien tomber<i class="material-icons right hide-on-med-and-down">close</i></span>
                <p class="flow-text">Dans le Dé à coudre, les joueurs sautent dans une piscine du haut d'un plongeoir et posent un bloc de couleur là où ils atterissent.
                  <br>Le but est de tomber dans l'eau pour annuler les dégats de chute en évitant les blocs posés par les autres joueurs, qui eux, signifient la mort.
                </p>
              </div>
            </div>
          </div>
          <div class="col m6 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/spleef.jpg" alt="spleef">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Spleef<i class="material-icons right hide-on-med-and-down">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">But du jeu : faire tomber les autres<i class="material-icons right hide-on-med-and-down">close</i></span>
                <p class="flow-text">Dans le spleef, les joueurs sont sur une couche de neige au dessus d'un lac de lave.
                  <br>Le but est de faire tomber les autres joueurs, en détruisant la neige avec une pelle ou en leur lançant des boules de neige pour les faire tomber.
                </p>
              </div>
            </div>
          </div>
          <div class="col m6 s12">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/japanese_school.jpg" alt="Call Of Duty map">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Modern Warfare<i class="material-icons right hide-on-med-and-down">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Le mode de jeu vedette !<i class="material-icons right hide-on-med-and-down">close</i></span>
                <p class="flow-text">Ce mode de jeu est basé sur une modification du jeu, <a href="https://www.curseforge.com/minecraft/mc-mods/vics-modern-warfare-mod" rel="nofollow" target="_blank">"Vic's Modern Warfare"</a> 
                  qui rajoute des armes à feu très détaillées a Minecraft.
                  <br>Ce mode de jeu inclus une séléction de map, un compteur de kills et de morts, ainsi qu'un systeme de séléction de loadout avec des armes déblocables en éliminant des ennemis.</p>
              </div>
            </div>
          </div>

          <h3 class="center title" id="vmw">Command blocks utilisés dans le mode COD</h3>

          <div class="card flow-text">
            <div class="card-content">
              <span class="center card-title">Séléction de loadout</span>
              <p>Le système de séléction d'armes à été la chose la plus difficile à mettre en place, et utilise beaucoup de commandes. J'ai donc simplifié les explications en ne décrivant que quelques commandes.</p>
            </div>
            <!--Collapsibles-->
            <ul class="collapsible flow-text">
              <li>
                <div class="collapsible-header"><i class="material-icons">tune</i>Séléction de la catégorie d'arme</div>
                <div class="collapsible-body">Dans la première salle du menu de séléction d'armes, le joueur obtient des items représentant les differents type d'armes, ainsi que l'option de quitter la partie.
                  <br>Pour choisir une option, il doit lacher l'objet, ce qui va changer son score d'inventaire suivant l'item qu'il va lacher. Il est ensuite téléporté dans la salle correspondante, puis son score est reset.
                  <img src="img/weapon_category.jpg" alt="weapon_category" class="width100">
                </div>
              </li>
              <li>
                <div class="collapsible-header"><i class="fa-solid fa-gun"></i>Séléction des armes</div>
                <div class="collapsible-body">
                  <p>Après avoir choisi sa catégorie d'arme, le joueur est téléporté dans le lobby correspondant.
                    <br>Dans cette salle, chaque panneau est cliquable et correspond à une arme diférente.
                    <img src="img/ar.jpg" alt="Fusils d'assauts" class="width100">
                    <br>Quand le joueur clique sur un panneau, si il n'as pas le niveau nécessaire, le jeu lui envoie un message, sinon, il lui donne une arme, des munitions et le téléporte à la suite de la séléction (pistolets).

                  </p>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">key</i>Systeme d'unlock</div>
                <div class="collapsible-body">
                  <p>A chaque élimination, le niveau du joueur est augmenté de 1.
                    <br>Cela permet de débloquer les armes suivant le niveau du joueur, ce qui ajoute de la progression, comme dans un vrai jeu vidéo.
                    <br>Ci dessous : la commande /give donne un fusil d'assaut aux joueurs de niveau 35 et plus.
                  </p>
                  <img src="img/give.jpg" alt="Give items" class="width100">
                </div>
              </li>
            </ul>
          </div>
          <h3 class="title center">D'autres modes de jeu sont-ils prévus ?</h3>
          <p class="flow-text">Oui, il est prévu d'ajouter d'autres modes de jeu, comme par exemple des courses de voitures, ou un mode "Capture The Flag", mais aussi plus de maps pour le mode Call Of Duty.</p>
        </div>

        <?php require "components/footer.php" ?>
        
    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
