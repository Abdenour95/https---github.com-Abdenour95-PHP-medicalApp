<?php
include("inc/page.restriction.php");
session_start();

if (isset($_POST["reserver"]) && $_POST["reserver"]<>''){
$matricule=$_SESSION['matricule'];
$daterdv=$_POST['daterdv'];
$heurerdv=$_POST['heurerdv'];


$erreur_rdv=0;

$requete="SELECT * FROM rendez_vous WHERE date_rdv='$daterdv' AND heure='$heurerdv'";
$resultat = $mysqli->query($requete) or die ('Erreur '.$requete.' '.$mysqli->error);



if (mysqli_num_rows($resultat)==0) {
    
    $reserver="INSERT INTO rendez_vous (num_patient_rdv, date_rdv, heure, etat) VALUES ('$matricule','$daterdv','$heurerdv','non confirmé')";

    $mysqli->query($reserver) or die ('Erreur '.$reserver.' '.$mysqli->error);

        echo "<script type=\"text/javascript\">alert('Le Rendez-vous a été reservé avec succés');</script>\n";
    ?>  
        <meta http-equiv='Refresh' content='0; URL=index.php?p=10'>
    <?php
}
else {
    $erreur_rdv=1;
}

}

?>

<!DOCTYPE html>
<html>
<?php
include("inc/h.inc.php");
?>
    <body style="overflow-x:hidden; background-image: url(img/stethescope.jpg); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: 50% 50%;" class="bg-light">
              <?php
include("inc/nav_admin.inc.php");
?>
        <div class="row px-2">
            <div class="col-lg-12 text-dark" style="background-color: #dee2e6;">
                    <h2 class="m-3 text-center">
                        Ajout d'un Rendez-vous
                </div>
            <div class="col-lg-3">
            </div>
            <div id="haut" class="col-lg-6 p-3 my-2" style="background-color: white; min-height: 570px;">
                <br>
                <form enctype="multipart/form-data" method="post" action="index.php?p=13" accept-charset="utf-8">
                    <?php  if ($erreur_rdv == 1) {
                        
                    
                        echo '<div class="alert alert-danger">
                            <strong>Erreur!</strong> Rendez-vous Déja Reservé, Veulliez Selectionner Un Autre.
                        </div>';

                        }
                    ?>
                <div class="row">

                <div class="col-lg-6">
                    <label for="daterdv">
                        Date du Rendez-vous:*
                    </label>
                    <input class="form-control" name="daterdv" type="date" required="required" min="<?php echo date('Y-m-d'); ?>">
                    </input>
                </div>
                <div class="col-lg-6">
                    <label for="heurerdv">
                        Heure du Rendez-vous:*
                    </label>
                    <select class="form-control" name="heurerdv" required="required">
                            <option>
                                08:00
                            </option>
                            <option>
                                08:30
                            </option>
                            <option>
                                09:00
                            </option>
                            <option>
                                09:30
                            </option>
                            <option>
                                10:00
                            </option>
                            <option>
                                10:30
                            </option>
                            <option>
                                11:00
                            </option>
                            <option>
                                11:30
                            </option>
                            <option>
                                12:00
                            </option>
                            <option>
                                12:30
                            </option>
                            <option>
                                13:00
                            </option>
                            <option>
                                13:30
                            </option>
                            <option>
                                14:00
                            </option>
                            <option>
                                14:30
                            </option>
                            <option>
                                15:00
                            </option>
                            <option>
                                15:30
                            </option>
                            <option>
                                16:00
                            </option>
                            <option>
                                16:30
                            </option>
                            <option>
                                17:00
                            </option>
                    </select>
                </div>
                </div>
                
                <hr>

                <h5 class="text-center">Liste des Rendez-vous Déja Pris</h5>

                
                <div class="row p-3" style="max-height: 350px; overflow-y: scroll;">


                    <?php 



                        /*$rdvquery="SELECT * FROM rendez_vous WHERE etat='non confirmé'";
                        $mysqli->query($rdvquery) or die ('Erreur '.$rdvquery.' '.$mysqli->error);
                        

                        if (mysqli_num_rows($rdvquery) > 0) {

                        while($resultrdv = $rdvquery->fetch_assoc()){

                            echo '<div class="col-lg-2 col-md-4 col-sm-4 bg-light border border-secondary text-center m-1">
                                '.$resultrdv['date_rdv'].' à '.$resultrdv['heure'].'
                            </div>';

                        }
                        }else{
                        echo '<div class=" col-lg-12 text-center m-1">
                        <h6 class="text-center">Aucun Rendez-vous Trouvé</h6>                       
                        </div>';
                        }*/


                        $requete="SELECT * FROM rendez_vous WHERE etat='non confirmé' or etat='confirmé' ORDER BY date_rdv desc";
        
                        $resultat = $mysqli->query($requete) or die ('Erreur '.$requete.' '.$mysqli->error);

                        if (mysqli_num_rows($resultat) > 0) {
    


                        while ($ligne = $resultat->fetch_assoc()) {

                        echo  
         
                            '<div class="p-1 col-lg-3 col-md-4 col-sm-4 bg-light border border-secondary text-center m-1">
                                '.$ligne['date_rdv'].' à '.$ligne['heure'].'
                            </div>';   

                        }

                        }
                        else {
                        echo '<div class=" col-lg-12 text-center m-1">
                        <h6 class="text-center">Aucun Rendez-vous Trouvé</h6>                       
                        </div>';
                        }


                    ?>
                    
                    

                </div>
                


                <input type="hidden" value="reserver" name="reserver"></input>
                <div class="float-right m-2">
                    <a class="btn btn-info" title="Annuler..." href="index.php?p=10"><i class="fas fa-arrow-left"></i> Annuler</a>
                    <button type="submit" title="Reserver" class="btn btn-info"><i class="fas fa-save"></i> Reserver</button>
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
