
   <!-- STYLSHEET-->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Dada Industrie Network Test" />
        <meta name="author" content="Souffou Daoudou" />
        <title>

        <?php //Title of the page 
            echo isset($title) 
            ? $title.' - Dada Industrie Network'
            : 'Dada Industrie Network - Simple,Rapide,Efficace!';
        ?>
        </title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>

    <?php 
        include('partials/_nav.php')
    ?>