<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <form method="post" action="traitement.php"> 
        <label for="nom">Votre nom</label>
        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom ..." required>
        <br>
        <label for="prenom">Votre prenom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prenom">
        <br>
        <label for="pseudo">Votre pseudo</label>
        <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo">
        <br> <label for="email"> Votre email</label>
        <input type="email" id="email" name="email" placeholder="Entrez votre email">
        <br>
        <label for="password">Votre mot de passe</label>
        <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe">
        <br>
        <input type="submit" value="S'inscrire" name="ok">
    </form>
</body>

</html>