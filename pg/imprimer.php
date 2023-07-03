<?php 
		
include("inc/page.restriction.php");

$numero=$_GET['numero'];
		// on limite à 4 le nombre d'enregistrements souhaité
$requete = "SELECT * FROM consultation, patient WHERE numero='$numero' AND num_patient=matricule";
// envoi de la requête
$resultat = $mysqli->query($requete) or die ('Erreur '.$requete.' '.$mysqli->error);

// tant qu'il y a un enregistrement, les instructions dans la boucle s'exécutent
$ligne = $resultat->fetch_assoc();		
		?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Impression...
        </title>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
                </link>
            </meta>
        </meta>
        <script defer src="lib/all.min.js"></script>

    <link href="css/font-face.css" rel="stylesheet" type="text/css">

        <script  src="lib/jquery-3.3.1.slim.min.js">
        </script>
        <script src="lib/popper.min.js">
        </script>
        <script src="lib/bootstrap.min.js">
        </script>
    </head>
    <body style="overflow-x:hidden;" onLoad="window.print();">

        <div class="row justify-content-center px-2 py-2" style="width:100%;"> 
            <div class="col-lg-12 py-2">
                <div class="border p-3">
                <h5 class="text-center"> Cabinet Médical Dr. F.Terbouk/h5><hr>
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
                <hr>
                <h5><span class="font-weight-bold">Age:</span> <?php echo''.$ligne['age'].'';?> ans</h5>
                <hr>
                <h5> <span class="font-weight-bold">Adresse:</span> <?php echo''.$ligne['adresse'].'';?></h5>
                <h5><span class="font-weight-bold">Numéro De Téléphone:</span> <?php echo''.$ligne['numtel'].'';?></h5>
                <h5> <span class="font-weight-bold">E-mail:</span> <?php echo''.$ligne['email'].'';?></h5>
            </fieldset>
            <fieldset class="form-group border rounded border-info p-3">
                <legend class="text-center font-weight-bold text-info" style="font-size: 20px;">Consultation</legend>
                <h5> <span class="font-weight-bold">Motif De Consultation:</span> <?php echo''.$ligne['motif'].'';?></h5>
                <h5 class="font-weight-bold">Date et Heure De Consultation: </h5><h5>Le : <?php echo''.$ligne['date_consultation'].'';?> à <?php echo''.$ligne['heure_cons'].'';?></h5><hr>

                <h5 class="font-weight-bold">Déscriptif De Consultation :</h5>
                <p><?php echo $ligne['descriptif'];?></p>
            </fieldset>
                </div>
            </div>
        </div>
    </body>
</html>
