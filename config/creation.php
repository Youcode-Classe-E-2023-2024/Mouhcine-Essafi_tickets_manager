<?php

include 'connection.php';

$table_Utlisateur = "Utlisateur";
$table_Ticket = "Ticket";
$table_Assignement = "Assignement";
$table_Commentaire = "Commentaire";
$table_Statut = "Statut";
$table_Tag = "Tag";


/**
 * create tables
 */

$sql1 = "CREATE TABLE IF NOT EXISTS $table_Statut (
    id_statut INT PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(255)
)";

$sql2 = "CREATE TABLE IF NOT EXISTS $table_Tag (
    id_tag INT PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(255)
)";

$sql3 = "CREATE TABLE IF NOT EXISTS $table_Utlisateur (
    id_utilisateur INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    email VARCHAR(255),
    mot_de_passe VARCHAR(255)
)";

$sql4 = "CREATE TABLE IF NOT EXISTS $table_Ticket (
    id_ticket INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(255),
    description TEXT,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    priorite INT,
    id_createur INT,
    id_statut INT,
    id_tag INT,
    FOREIGN KEY (id_statut) REFERENCES $table_Statut(id_statut),
    FOREIGN KEY (id_createur) REFERENCES $table_Utlisateur(id_utilisateur)
)";

$sql5 = "CREATE TABLE IF NOT EXISTS $table_Commentaire (
    id_commentaire INT PRIMARY KEY AUTO_INCREMENT,
    contenu TEXT,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    id_utilisateur INT,
    id_ticket INT,
    FOREIGN KEY (id_utilisateur) REFERENCES $table_Utlisateur(id_utilisateur),
    FOREIGN KEY (id_ticket) REFERENCES $table_Ticket(id_ticket)
)";

$sql6 = "CREATE TABLE IF NOT EXISTS $table_Assignement (
    id_attribution INT PRIMARY KEY AUTO_INCREMENT,
    id_ticket INT,
    id_assigne INT,
    date_attribution TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_ticket) REFERENCES $table_Ticket(id_ticket),
    FOREIGN KEY (id_assigne) REFERENCES $table_Utlisateur(id_utilisateur)
)";

if (!$conn->query($sql1) || !$conn->query($sql2) || !$conn->query($sql3) || !$conn->query($sql4) || !$conn->query($sql5) || !$conn->query($sql6)){
    echo "Error creating table: " . $conn->error;
}

?>