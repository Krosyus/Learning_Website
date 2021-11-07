<?php 

//var_dump(PDO::getAvailableDrivers()); // voir les BDD pris en compte

// Database Credentials
define('DB_HOST','localhost');
define('DB_NAME','industrie');
define('DB_USERNAME','root');
define('DB_PASSWORD','');

// BBD CONNECTION
try{
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USERNAME,DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    die('Erreur'.$e->getMessage());
}

?>