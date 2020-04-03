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
            <a class="onglets"> 
                <form >
                    <input type="hidden" name="ref" value="accueil.php"><input type="submit" value="Accueil" class="link-lookalike link-lookalike-acceuil">
                </form> 
            </a>
          

            <b class="nos-produits" >Nos produits </b>
              <?php
              $req = 'SELECT cat_libelle FROM categorie'; 
              
              $menu = $connection ->query($req);    
              
              while($ligne = $menu->fetch()) { ?>   
                <a class="onglets">
                  <form action="tableau.php">
                      <input type="hidden" name="ref" <?php echo 'value="'.$ligne['cat_libelle'].'"'?>><input type="submit" <?php echo 'value="'.$ligne['cat_libelle'].'"'?> class="link-lookalike ">
                  </form>
                </a>
              <?php 
              }  
              ?>
              
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
