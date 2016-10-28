<?php

function connect()
{
    try {
        $bdd = new PDO('mysql:host=mysql4.000webhost.com;dbname=a6122460_main;charset=utf8', 'a6122460_eti', 'ilovecats159');
    } catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

    return $bdd;
}
