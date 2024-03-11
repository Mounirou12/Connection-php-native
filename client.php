<?php
/** @var pdo */
include_once "index.php";

$email = $_COOKIE['email'];
$token = $_COOKIE['token'];

if($token){
    $statement = $pdo->query("SELECT * FROM utilisateur WHERE email = '$email' AND token = '$token'");
$result = $statement->fetch();
if ($result !== false) { 
    echo "Vous etes bien connectes ".$result['pseudo']." !";
} 
}else{
    header("Location:login.php");
}
