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
    addNewTalent($name, $description, $databaseConnection);
    $msg = "L'insertion du nouveau talent a réussi";
} catch (PDOException $e) {
    $msg = "Il y a eu un problème avec l'insertion du nouveau talent"
    . $e->getMessage(); // Que en phase de développement 
}

$_SESSION['message'] = $msg;

header('location:' . URL . 'newTalent.php');
exit;