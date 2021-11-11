
<?php
require('config/database.php');
    require('includes/function.php');

    if (isset($_POST['register'])){
        // On verifie si tout les champs sont entrées (empty verifie si la variable exsisite avant de verifier les champs)
        if (not_empty(['name','firstname','pseudo','email','password','password_confirm'])){
            
            $errors = [];

            extract($_POST);

            if(mb_strlen($pseudo) < 3){ // mb_strlen verifie le nombre de caracteres(taille de la chaine de caractere)
                $errors[] = "Le pseudo est trop court min 3 caractères ^^!";
            }

            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errors[] = "Veuillez svp entrez une adresse email valide!"
            }

            if(mb_strlen($password) < 6){
                $errors[] = "Mot de passe trop court min 6 caractères ^^!";
            }else{
                if($password != $password_confirm){
                    $errors[] = "Les deux mots de passe ne concordent pas"
                }
            }

            // on verifie si le pseudo est deja utiliser dans la table users(bdd)
            if(is_already_in_use('pseudo', $pseudo, 'users')){
                $errors[] = "Pseudo déjà utilisé !";
            }
            
            if(is_already_in_use('email', $email, 'email')){
                $errors[] = "Adresse email déjà utilisé !";
            }

            if(count($errors) == 0){
                //Enregistrement de l'utilisateur
                
                // Envoi d'un mail d'activation
                
                // Informer l'utilisateur pour qu'il verifie sa boite mail
                //Message de bienveunue

                //Redirection vers sont profil
            }


        }else {
            $errors[] = "Veuillez SVP remplir tous les champs!"
        }
    }
?>


<?php 
    require('views/register.views.php');
?>