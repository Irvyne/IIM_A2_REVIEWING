<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

/**
 * @param array $database
 * @return bool|mysqli
 */
function database_connect(array $database)
{
    return mysqli_connect(
        $database['host'], // Hôte du serveur MySQL
        $database['username'], // Nom d'utilisateur pour la connexion MySQL
        $database['passwd'], // Mot de passe de l'utilisateur pour la connexion MySQL
        $database['dbname'] // Nom de la base de donnée du serveur MySQL
    );
}

/**
 * @param bool $link
 * @return true|false
 */
function database_disconnect($link = false)
{
    return mysqli_close($link);
}

$link = database_connect($parameters);