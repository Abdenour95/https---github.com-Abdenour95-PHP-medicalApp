<?php
if (isset($_POST["modif"])&& $_POST["modif"]<>''){
$numero=$_POST["modif"];
$motif=$_POST["motif"];
$descriptif=$_POST["descriptif"];
$date_consultation=$_POST["date_consultation"];
$heure_cons=$_POST["heure_cons"];



$modif="UPDATE consultation  SET motif='$motif', descriptif='$descriptif', date_consultation='$date_consultation', heure_cons='$heure_cons' WHERE numero='$numero'";
//
$mysqli->query($modif) or die ('Erreur '.$modif.' '.$mysqli->error);

	echo "<script type=\"text/javascript\"></script>\n";
?>	
<meta http-equiv='Refresh' content='0; URL=index.php?p=3&numero=<?php echo $numero ;?>'>
<?php

}

if (isset($_GET['numero'])){ 
$numero=$_GET['numero'];}
		// 
$requete = "SELECT * FROM consultation WHERE numero='$numero'";
// envoi de la requête
$resultat = $mysqli->query($requete) or die ('Erreur '.$requete.' '.$mysqli->error);

// 
$ligne = $resultat->fetch_assoc();		
		?>
<!DOCTYPE html>
<html>
<?php
include("inc/h.inc.php");
?>
    <body style="overflow-x:hidden; background-image: url(img/stethescope.jpg); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: 50% 50%;" class="bg-light">
       <?php
include("inc/nav_medecin.inc.php");
?>
        <div class="row px-2">
            <div class="col-lg-12 text-dark" style="background-color: #dee2e6;">
                    <h2 class="m-3 text-center">
                        Modifier La Consultation N°: <?php echo $ligne['numero'] ;?>
                    </h2>
                </div>
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6 p-3 my-2" style="background-color: white;">
                 <form enctype="multipart/form-data" method="post" action="index.php?p=3" accept-charset="utf-8"> 
                <fieldset class="form-group border rounded border-info p-3">
                        <legend class="text-center font-weight-bold text-info" style="font-size: 20px;">Informations de la Consultation</legend>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label>
                                Date De Consultation: *
                            </label>
                            <input required class="form-control" name="date_consultation" type="date" value="<?php echo $ligne['date_consultation'];?>">
                            </input>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>
                                Heure De Consultation: *
                            </label>
                            <input class="form-control" name="heure_cons" type="text" pattern="(08|09|10|11|12|13|14|15|16|17):[0-5]{1}[0-9]{1}" value="<?php echo $ligne['heure_cons'];?>">
                            </input>
                            <small class="form-text text-muted">
                                Heure Doit Etre Entre 08:00 et 17:59, Format HH:MM.
                            </small>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="Catégorie">
                            Motif De Consultation: *
                        </label>
     
                       <textarea class="form-control" required name="motif" placeholder="Enter un texte..."><?php echo $ligne['motif'] ;?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>
                            Déscriptif De La Consultation : *
                        </label>
                        <textarea class="form-control" required name="descriptif" placeholder="Enter un texte..."><?php echo $ligne['descriptif'] ;?>
                        </textarea>
                        <small class="form-text text-muted">
                            (*) Champ Obligatoire.
                        </small>
                    </div>
                </fieldset>
                <input name="modif" type="hidden" value="<?php echo''.$ligne['numero'].'';?>">
                <div class="float-right">
                <a class="btn btn-info" title="Annuler Les Modifications" style="width: 120px;" href="index.php?p=1"><i class="fas fa-arrow-left"></i> Annuler</a>
                <button type="submit" title="Appliquer Les Modifications" class="btn btn-info" style="width: 120px;" onclick="return confirm('êtes-vous sur de vouloir modifier cette consultation?');"><i class="fas fa-save"></i> Appliquer</button>
				</form>
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
