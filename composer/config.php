<?php
/**
 * Created by PhpStorm.
 * User: cmonnom
 * Date: 23/10/2015
 * Time: 18:56
 */

// connexion a la BDD



// fichier de lang

$selectlang = 0;


if ($selectlang == 1):
include 'lang/lang-fr.php';
else :
    include 'lang/lang-en.php';
    endif;
