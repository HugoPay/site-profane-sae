<?php
session_start();

require_once 'config.php';

if (empty($_POST['nom'])) {
    die('Veuillez saisir votre nom');
}
if (empty($_POST['prenom'])) {
    die('Veuillez saisir votre prénom');
}
if (empty($_POST['adresse'])) {
    die('Veuillez saisir une adresse');
}
if (empty($_POST['mail'])) {
    die('Veuillez saisir votre adresse mail');
}
if (empty($_POST['tel'])) {
    die('Veuillez saisir un numéro de téléphone');
}

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];

$databaseConnection = getDatabaseConnection();

try {
    $talent = [
        'name' => $_POST['name'],
        'descr' => $_POST['descr'],
    ];
    // Fonction pour ajouter client et bière à base de données
    $msg = "Votre commande a bien été prise en compte";
} catch (PDOException $e) {
    $msg = "Il y a eu un problème lors de votre commande"
    . $e->getMessage();
}

$_SESSION['message'] = $msg;

exit;