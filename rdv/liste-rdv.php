<?php

//connexion à la base de donnée
include '../conexion.php';

//Préparation de la requête avec jointure de table par l'id patients
$reponse = $bdd->query('SELECT * FROM patients
                        INNER JOIN appointments
                        WHERE patients.id = appointments.idPatients');
//récupération des données de la requête
$appointments = $reponse->fetchAll();

//boucle d'affichage des rendez vous
foreach($appointments as $appointment){
    echo "<br>".$appointment['id']; 
    echo "<br>".$appointment['dateHour']; 
    echo "<br>". $appointment['lastname']."<br>";
    echo    "<form action='delete-rdv.php' method='post'>
            <input type='hidden' name='rdvId' value=".$appointment['id'].">
            <button type='submit'>Supprimer ce rdv</button>
            
            </form>";
}
?>
<br>
<h3>Selection d'un rdv pour plus d'informations</h3>
<form action="" method="post"></form>
<!-- formulaire de sélection du numéro id des rendez vous -->
<form action="profil-rdv.php" method="POST">
    <select name="rdvId">
        <?php 
        foreach($appointments as $appointment){
            echo "<option>". $appointment['id'] ."</option>";
        }
        ?>
    </select>
    <button type="submit">Ok</button>
</form>