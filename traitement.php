<?php
/** @var pdo */
include_once "index.php";

if(isset($_POST['ok'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $statement = $pdo->prepare('INSERT INTO utilisateur(nom,prenom,pseudo,email,password) VALUES(:nom,:prenom,:pseudo,:email,:password,)');
    $statement->bindValue('nom',$nom);
    $statement->bindValue('prenom',$prenom);
    $statement->bindValue('pseudo',$pseudo);
    $statement->bindValue('email',$email);
    $statement->bindValue('password',md5($password));

    $statement->execute();
    $reponse = $statement->fetchAll(PDO::FETCH_ASSOC);
}

