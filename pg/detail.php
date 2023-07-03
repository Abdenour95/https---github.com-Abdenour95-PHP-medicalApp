<?php
include("inc/page.restriction.php"); 
if (isset($_GET['delete'])){
$numero=$_GET['numero'];
$supprimer= "DELETE FROM consultation WHERE numero='$numero'";
$mysqli->query($supprimer) or die ('Erreur '.$supprimer.' '.$mysqli->error);

?>  
<meta http-equiv='Refresh' content='0; URL=index.php?p=1'>
<?php
  
}		
 
$numero=$_GET['numero'];
		//
$requete = "SELECT * FROM consultation, patient WHERE numero='$numero' AND num_patient=matricule";
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
            <!--<div class="col-lg-12 text-dark" style="background-color: #dee2e6;">
                    <h2 class="m-3 text-center">
                        Détails de la Consultation N°: <?php echo''.$ligne['numero'].'';?>
                    </h2>
            </div>-->
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6 bg-light py-2 my-2">
            	<div class="p-3">
                <div class="row">
                <div class="col-lg-12">
            	<h4 class="border border-info rounded text-center text-info p-2">Consultation Numéro: <?php echo''.$ligne['numero'].'';?></h4>
                </div>
                </div>
                <br><br>
            <fieldset class="form-group border rounded border-info p-3">
                <legend class="text-center font-weight-bold text-info" style="font-size: 20px;">Informations Personnelles du Patient</legend>
                <h5><span class="font-weight-bold">Nom:</span> <?php echo''.$ligne['nom'].'';?></h5>
                <h5><span class="font-weight-bold">Prénom:</span> <?php echo''.$ligne['prenom'].'';?></h5>
                <h5><span class="font-weight-bold">Age:</span> <?php echo''.$ligne['age'].'';?> ans</h5>
                <hr>
                <h5> <span class="font-weight-bold">Adresse:</span> <?php echo''.$ligne['adresse'].'';?></h5>
                <h5><span class="font-weight-bold">Numéro De Téléphone:</span> <?php echo''.$ligne['numtel'].'';?></h5>
                <h5> <span class="font-weight-bold">E-mail:</span> <?php echo''.$ligne['email'].'';?></h5>
            </fieldset>
            <fieldset class="form-group border rounded border-info p-3">
                <legend class="text-center font-weight-bold text-info" style="font-size: 20px;">Consultation</legend>
                <h5><span class="font-weight-bold">Date et Heure De Consultation: </span><?php echo''.$ligne['date_consultation'].'';?> à <?php echo''.$ligne['heure_cons'].'';?></h5>
                <hr>
                <h5> <span class="font-weight-bold">Motif De Consultation:</span> <?php echo''.$ligne['motif'].'';?></h5>
               
                <h5 class="font-weight-bold">Déscriptif De Consultation :</h5>
                <p><?php echo $ligne['descriptif'];?></p>
            </fieldset>
                </div>

                <div class="float-right">
                <a class="btn btn-info my-1" style="width: 120px;" onclick="window.close();" title="Retour vers la liste des Consultations" href="index.php?p=1"><i class="fas fa-arrow-left"></i>  Retour </a>
                <a class="btn btn-info my-1" style="width: 120px;" title="Modifier" href="index.php?p=3&numero=<?php echo''.$ligne['numero'].'';?>"><i class="fas fa-edit"></i> Modifier</a>
				<a target="_blank" class="btn btn-info my-1" style="width: 120px;" title="Imprimer la Fiche de La Consultation" href="index.php?p=7&numero=<?php echo''.$ligne['numero'].'';?>"><i class="fas fa-print"></i>  Imprimer </a>
                <a class="btn btn-danger my-1" title="Supprimer La Consultation" style="width: 120px;" onclick="return confirm('êtes-vous sur de vouloir Supprimer cette consultation?');" href="index.php?p=4&delete=1&numero=<?php echo''.$ligne['numero'].'';?>"><i class="fas fa-trash-alt"></i> Supprimer</a>
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
