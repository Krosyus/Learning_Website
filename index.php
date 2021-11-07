
<?php 
      if (isset($_POST['Envoyer'])){ // Si il a cliquer sur le boutton envoyer 
        if (isset($_POST['nom'],$_POST['prenom'],$_POST['message'])){ // Si ses infos sont rempli
            extract($_POST);
            // Requette SQL
            echo $nom." ".$prenom." ".$message;
        } 
      }
      require('views/index.views.php');
?>

