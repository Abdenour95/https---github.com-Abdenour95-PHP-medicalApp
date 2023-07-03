

<?php

if (isset($_GET['delete'])){
$num_rdv=$_GET['num_rdv'];
$supprimer= "DELETE FROM rendez_vous WHERE num_rdv='$num_rdv'";
$mysqli->query($supprimer) or die ('Erreur '.$supprimer.' '.$mysqli->error);

}


    if (isset ($_POST["filtre"])){$filtre=$_POST["filtre"];$search=$_POST["search"]; 
		$requete="SELECT * FROM rendez_vous WHERE num_patient_rdv='$num_pat_rdv' AND $filtre LIKE '%$search%'  ORDER BY $filtre ASC";}
		
// requête
$resultat = $mysqli->query($requete) or die ('Erreur '.$requete.' '.$mysqli->error);

if (mysqli_num_rows($resultat) > 0) {
    

//  boucle 
while ($ligne = $resultat->fetch_assoc()) {


    if ($ligne['etat']=='non confirmé') {

        $badge='<span class="badge badge-warning" style="width: 75px;">En Attente <i class="fas fa-hourglass-half"></i></a></span>';

        
    }else{
        if ($ligne['etat']=='rufusé') {

            $badge='<span class="badge badge-danger" style="width: 75px;">Rufusé <i class="fas fa-times"></i></a></span>';

        }else{

        $badge='<span class="badge badge-success" style="width: 75px;">Confirmé <i class="fas fa-check"></i></a></span>';

        }
    }


 echo  
		 
                     '<div class="row col-lg-12 text-center mx-1" style="border-bottom: solid 2px grey;">
                        <div class=" col-lg-2 " style="line-height: 275%;">
                            '.$ligne['num_rdv'].'
                        </div>
                        <div class=" col-lg-3 col-md-3" style="line-height: 275%;">
                            '.$ligne['date_rdv'].'
                        </div>
                        <div class=" col-lg-3 col-md-3 d-none d-lg-block" style="line-height: 275%;">
                            '.$ligne['heure'].'
                        </div>
                        <div class="col-lg-2 " style="line-height: 275%;">
                            '.$badge.'
                        </div>
                        <div class="col-lg-2 col-md-3">
                            
                            <a class="btn-sm btn btn-danger my-2 " title="Supprimer" href="index.php?p=10&delete=1&num_rdv='.$ligne['num_rdv'].'" onclick="return confirm(\'Supprimer?\');">
                                        <i class="fas fa-trash-alt"></i></a>

                        </div>                        
                    </div>';   

}

}
else {
    echo '<div class=" col-lg-12 text-center mx-1" style="border-bottom: solid 2px grey;padding:20px">
                        <h4 class="text-center">aucun rendez-vous trouvé</h4>                       
                    </div>';
}

?>