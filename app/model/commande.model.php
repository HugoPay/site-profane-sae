<?php

function addCommande(array $commande, PDO $db): bool
{

    try {
        $sql = 'INSERT INTO client (nom, prenom, adresse, mail, telephone)
                VALUES (:nom, :prenom, :adresse, :mail, :tel)';

        $stmt = $db->prepare($sql);
        $stmt->bindValue('nom', $commande['nom']);
        $stmt->bindValue('prenom', $commande['prenom']);
        $stmt->bindValue('adresse', $commande['adresse']);
        $stmt->bindValue('mail', $commande['mail']);
        $stmt->bindValue('tel', $commande['tel']);
        return $stmt->execute();
    } catch (PDOException $e) {
        throw $e;
    }
}