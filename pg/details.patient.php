<?php
include("inc/page.restriction.php");
if (isset($_GET['delete'])){
$ident=$_GET['matricule'];
$supprimer= "DELETE FROM patient WHERE matricule='$ident'";
$mysqli->query($supprimer) or die ('Erreur '.$supprimer.' '.$mysqli->error);

?>  
<meta http-equiv='Refresh' content='0; URL=index.php?p=8'>
<?php

} 
		
 
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
    <body style="overflow-x:hidden; background-image: url(img/stethescope.jpg); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: 50% 50%;">
              <?php
include("inc/nav_medecin.inc.php");
?>
        <div id="haut" class="row px-2">
            <!--<div class="col-12 py-2 text-dark" style="background-color: #dee2e6;">
                    <div class="float-right p-2">
                        <div class="d-inline">
                            <a class="btn btn-info" style="width: 140px;" title="Afficher La Liste des Consultations" href="index.php?p=1">
                                Consultations <i class="fas fa-list-ul"></i>
                            </a>
                            <a href="index.php?p=6" title="Se déconnecter et Retourner Vers L'Acceuil." class="btn btn-info" style="width: 140px;">
                                Déconnexion <i class="fas fa-sign-out-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>-->
            <div class="col-lg-12 text-dark" style="background-color: #dee2e6;">
                    <h2 class="m-3 text-center">
                        Détails du Patient N°: <?php echo''.$ligne['matricule'].'';?>
                    </h2>
            </div>
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6 bg-light py-2 my-2">
            	<div class="p-3">
                <div class="row">
                <div class="col-lg-12">
            	<h4 class="border border-info rounded text-center text-info p-2">Patient Numéro: <?php echo''.$ligne['matricule'].'';?></h4>
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

                <div class="float-right">
                <a class="btn btn-info my-1" style="width: 120px;" title="Retour vers la liste des Consultations" href="index.php?p=8"><i class="fas fa-arrow-left"></i>  Retour </a>
                <a class="btn btn-info my-1" title="Ajouter une Consultation Pour ce Patient" style="width: 120px;" href="index.php?p=2&matricule=<?php echo''.$ligne['matricule'].'';?>"><i class="fas fa-plus-circle"></i> Consultation</a>    

				<a target="_blank" class="btn btn-info my-1" style="width: 120px;" title="Imprimer la Fiche de La Consultation" href="index.php?p=18&matricule=<?php echo''.$ligne['matricule'].'';?>"><i class="fas fa-print"></i>  Imprimer </a>
                <a class="btn btn-danger my-1" title="Supprimer La Consultation" style="width: 120px;" onclick="return confirm('êtes-vous sur de vouloir Supprimer ce compte de patient et tout ses rendez-vous et ses Consultations?');" href="index.php?p=14&delete=1&matricule=<?php echo''.$ligne['matricule'].'';?>"><i class="fas fa-trash-alt"></i> Supprimer</a>            
                </div>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
               <?php
include("inc/f.inc.php");
?>
    </body>
</html>
