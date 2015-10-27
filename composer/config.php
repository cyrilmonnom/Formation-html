<?php
/**
 * Created by PhpStorm.
 * User: cmonnom
 * Date: 23/10/2015
 * Time: 18:56
 */

// connexion a la BDD
include 'connexion.php';
/**
 * Utilisation de la classe
 */
try
{
    $Mysql = new Mysql('localhost', 'formation', 'root', 'root');
}
catch (MySQLExeption $e)
{
    echo $e -> RetourneErreur();
}



$Resulats = $Mysql->TabResSQL('SELECT * FROM roles');
foreach ($Resulats as $value)
{
    echo $value['id'];
    echo $value['statut'];
}


// fichier de lang

$selectlang = 0;


if ($selectlang == 1):
include 'lang/lang-fr.php';
else :
    include 'lang/lang-en.php';
    endif;
