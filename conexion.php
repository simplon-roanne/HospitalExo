<?php
// connexion à la base de données hospitalE2N
try
{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=hospitalE2N','root','');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
