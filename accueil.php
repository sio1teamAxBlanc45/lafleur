<?php
  include 'Connexion.php';





?>

<!DOCTYPE html>


<html>
    <head>
        <title>Accueil Société Lafleur</title>
        <meta charset="UTF-8">
        <link href="css.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
        
        

    
    <body class='body'>
        
        <header>
            <h1 class="titre"><img src="Images\ACCUEIL.JPG" alt="Fleur accueil" class="img_header">Société Lafleur</h1>
            6, cloitre St Aignan
            <br>
            45000 Orléans
        </header>
        

        <div class="content">

          <div class="menu">
            
            <div>
              <a class="onglets vertical-menu-accueil" href="accueil.php">Accueil</a>
              <a class="nos-produits vertical-menu-produit" href="#">Nos produits</a>
              <a class="onglets vertical-menu" href="listpdt.php">
                <?php

                $sql = $connection->query("SELECT cat_libelle FROM categorie WHERE cat_code='bul'")or die(print_r($connection->errorInfo()));
                $donnees = $sql->fetch();
                echo $donnees['cat_libelle'];

                ?>
              </a>
              <a class="onglets vertical-menu" href="listpdt.php">
                <?php

                $sql = $connection->query("SELECT cat_libelle FROM categorie WHERE cat_code='mas'")or die(print_r($connection->errorInfo()));
                $donnees = $sql->fetch();
                echo $donnees['cat_libelle'];

                ?> 
              </a>
              <a class="onglets vertical-menu" href="listpdt.php">
                <?php

                $sql = $connection->query("SELECT cat_libelle FROM categorie WHERE cat_code='ros'")or die(print_r($connection->errorInfo()));
                $donnees = $sql->fetch();
                echo $donnees['cat_libelle'];

                ?>
              </a>
            </div>
          </div>
          
          <div>
            &nbsp;
          </div>

          <div class='div-contenu'>
              "Dites-le avec Lafleur"
              <br>
              <br>
              <img src="Images\ACCUEIL.JPG" alt="Fleur accueil">
              <br>
              <br>
              pour recevoir un bon de commande
              <br>
              Appelez notre service commercial au 03.22.84.65.74
          </div>

      </div>


        <footer>
            <h2 class="pied_page">® copyrights Votre nom réalisé le ...</h2>
        </footer>
        
    </body>
</html>
