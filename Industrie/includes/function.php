<?php 

    if(!function_exists('not_empty')){
        function not_empty($fields = []){
            if(count($fields) != 0){
                foreach($fields as $filed){
                    if(empty($_POST[$field]) || trim($_POST[$field]) == ""){ // si un champs est vide
                        return false;
                    }
                } //sinon
                return true;
            }
        }
    }

    if(!function_exists('is_already_in_use')){
        function is_already_in_use($field,$value,$table){
            global $db;

            $Q = $db->prepare("SELECT id FROM $table WHERE $field = ?"); // on verifie si cette valeurs n'es pas deja présente dans la bdd
            $Q->execute([$value]);
            $count = $Q->rowCount(); // Nombre de resultat
            $Q->closeCursor();

            return $count;
        }
    }

?>