<?php
include("inc/page.restriction.php");
		
 
$matricule=$_GET['matricule'];
		//
$requete = "SELECT * FROM patient WHERE matricule='$matricule'";
// envoi de la requête
$resultat = $mysqli->query($requete) or die ('Erreur '.$requete.' '.$mysqli->error);

// tant qu'il y a un enregistrement, les instructions dans la boucle s'exécutent
$ligne = $resultat->fetch_assoc();		
		?>
<!DOCTYPE html>
<html>
<?php
include("inc/h.inc.php");
include("inc/page.restriction.php");
?>
    <body style="overflow-x:hidden;" onLoad="window.print();">


        <div id="haut" class="row px-2">
            <div class="col-lg-12 bg-light py-2 my-2">
            	<div class="p-3">
                <h5 class="text-center">
                    Cabinet Médical Dr. F.Terbouk
                </h5>
                <hr>
                <div class="row">
                <div class="col-lg-12">
            	<h4 class="border border-info rounded text-center text-info p-2">Fiche du Patient Numéro: <?php echo''.$ligne['matricule'].'';?></h4>
                </div>
                </div>
                <br><br>
            <fieldset class="form-group border rounded border-info p-3">
                <legend class="text-center font-weight-bold text-info" style="font-size: 20px;">Informations Personnelles du Patient</legend>
                <h5><span class="font-weight-bold">Nom:</span> <?php echo''.$ligne['nom'].'';?></h5>
                <h5><span class="font-weight-bold">Prénom:</span> <?php echo''.$ligne['prenom'].'';?></h5>
                <hr>
                <h5><span class="font-weight-bold">Age:</span> <?php echo''.$ligne['age'].'';?> ans</h5>
                <hr>
                <h5> <span class="font-weight-bold">Adresse:</span> <?php echo''.$ligne['adresse'].'';?></h5>
                <h5><span class="font-weight-bold">Numéro De Téléphone:</span> <?php echo''.$ligne['numtel'].'';?></h5>
                <h5> <span class="font-weight-bold">E-mail:</span> <?php echo''.$ligne['email'].'';?></h5>
            </fieldset>
            <fieldset class="form-group border rounded border-info p-3">
                <legend class="text-center font-weight-bold text-info" style="font-size: 20px;">Compte</legend>
                <h5> <span class="font-weight-bold">Identifiant:</span> <?php echo''.$ligne['id'].'';?></h5><hr>
                <h5><span class="font-weight-bold">Mot de Passe: </span><?php echo''.$ligne['password'].'';?></h5>
                <hr>
            </fieldset>
                </div>

                
            </div>
            
    </body>
</html>
