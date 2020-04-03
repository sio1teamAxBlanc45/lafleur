<?php
    require 'Connexion.php';
    session_start();
    
    if (isset($_SESSION['sql'])){
    
    $sql = $_SESSION['sql'];
    $table = $connection->query($sql) or die (print_r($connection->errorInfo()));
    $nbligne = $table->rowcount();
    $rowall = $table->fetchAll();
    }
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
            <h1 class="titre">Société Lafleur</h1>
            6, cloitre St Aignan<br>
            45000 Orléans
        </header>
        

        <div class="test">

            <div class="menu">
            
                <div class="vertical-menu">
                    <a class="onglets vertical-menu" >
                    <form action="accueil.php">
                        <input type="hidden" name="ref" value="accueil"><input type="submit" value="Accueil" class="link-lookalike"></form>
                    </a>
                        
                   
                   
                   <b class="nos-produits"> Nos produits :</b>
                   
                   
                   
                    <a class="onglets vertical-menu"> 
                        <form action="tableau.php">
                            <input type="hidden" name="ref" value="bulbes"><input type="submit" value="Bulbes" class="link-lookalike"></form> 
                    </a>
                   
                 
                   
                    <a class="onglets vertical-menu"> 
                        <form action="tableau.php">
                            <input type="hidden" name="ref" value="plantes"><input type="submit" value="Plantes à massif" class="link-lookalike"></form>
                    </a>
                   
                   
                    <a class="onglets vertical-menu"> 
                        <form action="tableau.php">
                            <input type="hidden" name="ref" value="rosiers"><input type="submit" value="Rosiers" class="link-lookalike"></form> 
                    </a>
                </div>
            </div>
          
            <div class='div-contenu'>
               
            <?php
               
               if(isset($_SESSION['sql'])){
               
               if ($nbligne !=0)
                {
            ?>
                <table border="1">
                    <thead>
                        <tr>    
                            <th>Photo</th>
                            <th>Référence</th>
                            <th>Désignation</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
            <?php
                    foreach ($rowall as $row)
                    {
                    
            ?>
                    <tr>
                        <td> <img src=<?php echo 'Images'.'&#92;'.$row['pdt_image'].'.JPG' ?> ></td>
                        <td> <?php echo $row['pdt_ref'] ?></td>
                        <td> <?php echo $row['pdt_designation'] ?></td>
                        <td> <?php echo $row['pdt_prix'] ?></td>
                    </tr>
            <?php 
                        }
                    }
            }
            ?>      
                    </tbody>        
                </table>                
 
                             
            </div>   
        </div>

     


        <footer>
            <h2>® copyrights ... réalisé le </h2>
        </footer>
        
    </body>
</html>
