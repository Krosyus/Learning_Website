<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form method="post">
        <p>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required="required"/> <br/>

            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" required="required"/> <br/>

            <label for="message">Message</label>
            <textarea name="message" id="message" required="required"></textarea> <br/>

            <input type="submit" name="Envoyer" value="Envoyer">
        </p>
    </form>
</body>
</html>