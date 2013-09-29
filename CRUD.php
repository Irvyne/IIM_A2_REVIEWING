<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

$link = mysqli_connect(
    'localhost',    // Hôte du serveur MySQL
    'username',     // Nom d'utilisateur pour la connexion MySQL
    'password',     // Mot de passe de l'utilisateur pour la connexion MySQL
    'database'      // Nom de la base de donnée du serveur MySQL
);

/*
 * Create
 */
$sql = "INSERT INTO article (`id`, `title`, `content`) VALUES (NULL, '$title', '$content')";
$result = mysqli_query($link, $sql);

/*
 * Read
 */
$sql = "SELECT * FROM article";
$result = mysqli_query($link, $sql);

/*
 * Update
 */
$sql = "UPDATE article SET `title`='$title', `content`='$content' WHERE `id`=$id";
$result = mysqli_query($link, $sql);

/*
 * Delete
 */
$sql = "DELETE FROM article WHERE `id`=$id";
$result = mysqli_query($link, $sql);