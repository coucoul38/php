<?php require "cfg/config.php";
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
      <?php 
      $title = "Php projet Noham et Justin";
      require "components/head.php";
      require "components/securityAdmin.php";
      ?>
    </head>

    <body>
        <?php require "components/navbar.php";
        
        if($_SESSION['user']['admin']==1){
            echo "Bienvenue sur le pannel admin ".$_SESSION['user']['username']."<br>";
            ?>
            <form method='post' action = "admin.php?id=users">
                <input type='submit' value='Gestion des utilisateurs'>
            </form>
            <form method='post' action = "admin.php?id=projects">
                <input type='submit' value='Gestion des projets'>
            </form>
            <form method='post' action="admin.php?id=home">
                <input type='submit' value="Gestion de la page d'accueil">
            </form>
            <?php
            //GESTION DES PROJETS
            if($_GET['id']=="projects"){
                $sql = "SELECT COUNT(*) FROM projects";
                $pre = $pdo->prepare($sql); 
                $pre->execute();
                $projectCount = $pre->fetchColumn();
                echo "<br>Il y a ".$projectCount." projets en tout!<br>";

                $sql = "SELECT * FROM projects";
                $pre = $pdo->prepare($sql); 
                $pre->execute();
                $projectList = $pre->fetchall();
                ?>
                <h4>Créer un nouveau projet</h4>
                <form method='post' action='actions/createProject.php' enctype="multipart/form-data">
                    <input type='text' name='title' value='Entrez un titre'>
                    <input type='file' name='image'>
                    <input type='submit' value='Créer le projet'>
                </form><br>
                <?php
                foreach($projectList as $project){
                    echo "<br><b>ID :</b> ".$project[0]."<br>"; 
                    ?>
                    <form method='post' action="actions/rename.php?id=project" enctype="multipart/form-data">
                        <input type='hidden' name="id" value="<?php echo $project[0]; ?>">
                        <label for="newName">Name</label>
                        <input type='text' name="newName" value="<?php echo $project[1]; ?>">
                        <label for="description">Description</label>
                        <textarea name="description"><?php echo $project[5]?></textarea>
                        <label for="h2">h2</label>
                        <input type='text' name="h2" value="<?php echo $project[3]; ?>">
                        <label for="p1">Text</label>
                        <textarea name="p1"><?php echo $project[4]?></textarea>
                        <input type='submit' value="Update project">
                    </form>
                    <form method='post' action="actions/changeImg.php" enctype="multipart/form-data">
                        <input type='file' name='image'>
                        <input type='hidden' name="id" value="<?php echo $project[0]; ?>">
                        <input type='submit' value='Change image'>
                    </form>
                    <form method='post' action="actions/delete.php?id=project">
                        <input type='hidden' name="id" value="<?php echo $project[0]; ?>">
                        <input type='submit' value='Delete project'>
                    </form>
            <?php
                }
            }
            elseif($_GET['id']=="users"){ //GESTION DES UTILISATEURS
                $sql = "SELECT COUNT(*) FROM users";
                $pre = $pdo->prepare($sql); 
                $pre->execute();
                $userCount = $pre->fetchColumn();
                echo "<br>Il y a ".$userCount." utilisateurs en tout!<br>";

                $sql = "SELECT * FROM users";
                $pre = $pdo->prepare($sql); 
                $pre->execute();
                $userList = $pre->fetchall();
                //print_r($userList);
                foreach($userList as $user){
                    echo "<br><b>ID :</b> ".$user[0]."<br>"; 
                    ?>
                    <form method='post' action="actions/rename.php?id=user">
                        <input type='hidden' name="id" value="<?php echo $user[0]; ?>">
                        <input type='text' name="newName" value="<?php echo $user[1] ?>">
                        <input type='submit' value="Change name">
                    </form>
                    <?php
                    echo "<b>Email :</b> ".$user[2]."<br>";
                    echo "<b>Password :</b> ".$user[3]."<br>";
                    ?>
                    <form method='post' action="actions/delete.php?id=user">
                        <input type='hidden' name="id" value="<?php echo $user[0]; ?>">
                        <input type='submit' value='Delete user'>
                    </form>
                    <form method='post' action="actions/changeAdmin.php">
                        <input type='hidden' name='id' value="<?php echo $user[0]; ?>">
                        <input type='hidden' name='admin' value="<?php echo $user[4]; ?>">
                        <input type='submit' value='<?php echo $user[4]==0?"Utilisateur":"Admin"?>'>
                    </form>
                    <?php
                }  
            }
            elseif($_GET['id']=="home"){//GESTION DE L'ACCUEIL
                $sql = "SELECT * FROM home";
                $pre = $pdo->prepare($sql); 
                $pre->execute();
                $home = $pre->fetchall();
                //print_r($home);
                ?>
                <p>Attention : bien mettre un \ devant les guillemets</p>
                <form method='post' action ="actions/changeHome.php">
                    <label for="h1">Title</label>
                    <input type="text" method="post" name="h1" value="<?php echo $home[0][0] ?>">
                    <label for="p2">Paragraph 1</label>
                    <textarea name="p1"><?php echo $home[0][2] ?></textarea>
                    <label for="h2">Second title</label>
                    <input type="text" method="post" name="h2" value="<?php echo $home[0][1] ?>">
                    <label for="p2">Paragraph 2</label>
                    <textarea name="p2"><?php echo $home[0][3] ?></textarea>
                    <label for="card1title">Card title 1</label>
                    <input type="text" method="post" name="card1title" value="<?php echo $home[0][6] ?>">
                    <label for="pCard1">Card 1 content</label>
                    <textarea name="pCard1"><?php echo $home[0][4] ?></textarea>
                    <label for="card2title">Card title 2</label>
                    <input type="text" method="post" name="card2title" value="<?php echo $home[0][7] ?>">
                    <label for="pCard2">Card 2 content</label>
                    <textarea name="pCard2"><?php echo $home[0][5] ?></textarea>
                    <input type='submit' value= "Change home page!">
                </form>
                <?php
            }
        }
        ?>
    </body>
</html> 