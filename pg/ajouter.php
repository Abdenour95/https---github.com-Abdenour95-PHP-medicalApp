<?php



if (isset($_POST["send"])&& $_POST["send"]<>''){
$matricule=$_GET['matricule'];
$date_consultation=$_POST["date_consultation"];
$heure_cons=$_POST["heure_cons"];
$motif=$_POST["motif"];
$descriptif=$_POST["descriptif"];

// sql 
$ajout="INSERT INTO consultation (num_patient,date_consultation,heure_cons,motif,descriptif) VALUES ('$matricule','$date_consultation','$heure_cons','$motif','$descriptif')";

$mysqli->query($ajout) or die ('Erreur '.$ajout.' '.$mysqli->error);

	echo "<script type=\"text/javascript\">alert('La consultation a été ajouté avec succés');</script>\n";
?>	
<meta http-equiv='Refresh' content='0; URL=index.php?p=1'>
<?php

}

?>

<!DOCTYPE html>
<html>
<?php
include("inc/page.restriction.php");
include("inc/h.inc.php");
?>
    <body style="overflow-x:hidden; background-image: url(img/stethescope.jpg); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: 50% 50%;" class="bg-light">
              <?php
include("inc/nav_medecin.inc.php");
?>
        <div class="row px-2">
            <div class="col-lg-12 text-dark" style="background-color: #dee2e6;">
                    <h2 class="m-3 text-center">
                        Ajouter Une Consultation Pour Le Patient N°: <?php echo $_GET['matricule']; ?>
                    </h2>
                </div>
            <div class="col-lg-3">
            </div>
            <div id="haut" class="col-lg-6 p-3 my-2" style="background-color: white;">
                <br>
                <form enctype="multipart/form-data" method="post" action="index.php?p=2&matricule=<?php echo $_GET['matricule']; ?>" accept-charset="utf-8">
                    <fieldset class="form-group border rounded border-info p-3">
                        <legend class="text-center font-weight-bold text-info" style="font-size: 20px;">Informations de la Consultation</legend>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label>
                                Date De Consultation: *
                            </label>
                            <input class="form-control" name="date_consultation" type="date" required="required">
                            </input>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>
                                Heure De Consultation: *
                            </label>
                            <input class="form-control" name="heure_cons" type="text" pattern="(08|09|10|11|12|13|14|15|16|17):[0-5]{1}[0-9]{1}" placeholder="HH:MM"></input>
                            <small class="form-text text-muted">
 								Heure Doit Etre Entre 08:00 et 17:59, Format HH:MM.
							</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Catégorie">
                            Motif De Consultation: *
                        </label>
                        <input class="form-control" name="motif" placeholder="Entrer un Motif..." required="required">
                        <label>
                            Déscriptif De la Consultation: *
                        </label>
                        <textarea class="form-control" name="descriptif" placeholder="Entrer un text..." required="required"></textarea>
                        <small class="form-text text-muted">
 							(*) Champ Obligatoire.
						</small>
                    </div>
                </fieldset>
                <input type="hidden" value="send" name="send"></input>
                <div class="float-right">
                    <a class="btn btn-info" title="Annuler..." href="javascript:window.history.back();"><i class="fas fa-arrow-left"></i> Annuler</a>
                    <button type="submit" title="Enregister" class="btn btn-info"><i class="fas fa-save"></i> Enregister</button>
                </div>
                </form>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
        <?php
include("inc/f.inc.php");
?>
    </body>
</html>
