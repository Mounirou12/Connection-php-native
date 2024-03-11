<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion</title>
</head>

<?php

/** @var pdo */
include_once "index.php";



    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        if ($email != "" && $password != "") {
            $token = bin2hex(random_bytes(32));
            // connexion à la base de données
            $statement = $pdo->query("SELECT * FROM utilisateur WHERE email = '$email' AND password = '$password'");
            $result = $statement->fetch();
            if ($result !== false) { 
                $pdo->exec("UPDATE utilisateur SET token = '$token' WHERE email = '$email' AND password = '$password'");
                setcookie('token', $token,time()+3600);
                setcookie('email', $email,time()+3600);
                header('Location: client.php');
            } else {
                $error_msg = "Email ou mot de passe incorrect";
            }
        }
    
    
}
?>

<body>
    <form method="post" action="">
        <label for="email">Email</label>
        <input type="email" placeholder="Entrez votre email ..." id="email" name="email" required>
        <br>
        <label for="password">Mot de passe </label>
        <input type="password" placeholder="Entrez votre mot de passe ..." id="password" name="password" >
        <br>
        <input type="submit" value="Se connecter"  name="ok">
    </form>

    <?php if($error_msg): ?>
        <p><?php echo $error_msg; ?></p>
        <?php endif; ?>
</body>

</html>