

<?php


if (isset($_GET['confirmer'])){

$num_rdv=$_GET['num_rdv'];


$confirmer_rdv = "UPDATE rendez_vous SET etat='confirmé' WHERE num_rdv='$num_rdv'";
$mysqli->query($confirmer_rdv) or die ('Erreur '.$confirmer_rdv.' '.$mysqli->error);

}



if (isset($_GET['rufuser'])){

$num_rdv=$_GET['num_rdv'];

$rufuser_rdv = "UPDATE rendez_vous SET etat='rufusé' WHERE num_rdv='$num_rdv'";
$mysqli->query($rufuser_rdv) or die ('Erreur '.$rufuser_rdv.' '.$mysqli->error);

}

if (isset($_GET['supprimer'])){

$num_rdv=$_GET['num_rdv'];


$supprimer_rdv = "DELETE FROM rendez_vous WHERE num_rdv='$num_rdv'";
$mysqli->query($supprimer_rdv) or die ('Erreur '.$supprimer_rdv.' '.$mysqli->error);

}


    if (isset ($_POST["filtre"])){$filtre=$_POST["filtre"];$search=$_POST["search"]; 
		$requete="SELECT * FROM rendez_vous, patient WHERE  $filtre LIKE '%$search%'  ORDER BY $filtre ASC";}
		
// requête
$resultat = $mysqli->query($requete) or die ('Erreur '.$requete.' '.$mysqli->error);

if (mysqli_num_rows($resultat) > 0) {
    

//  boucle 
while ($ligne = $resultat->fetch_assoc()) {



    if ($ligne['etat']=='non confirmé') {

        $badge='<span class="badge badge-warning" style="width: 75px;">En Attente <i class="fas fa-hourglass-half"></i></a></span>';

        $button='<a class="btn-sm btn btn-outline-success my-2" title="Confirmer le Rendez-vous" href="index.php?p=15&confirmer=1&num_rdv='.$ligne['num_rdv'].'">
                                        <i class="fas fa-check-circle"></i></a>';
        $button2='<a class="btn-sm btn btn-outline-danger my-2" title="Rufuser le Rendez-vous" href="index.php?p=15&rufuser=1&num_rdv='.$ligne['num_rdv'].'">
                                        <i class="fas fa-times"></i></a>';

    }else{

        if ($ligne['etat']=='rufusé') {

            $button='<a class="btn-sm btn btn-outline-success my-2" title="Confirmer le Rendez-vous" href="index.php?p=15&confirmer=1&num_rdv='.$ligne['num_rdv'].'">
                                        <i class="fas fa-check-circle"></i></a>';

            $button2='<a class="btn-sm disabled btn btn-outline-danger my-2" title="Rufuser le Rendez-vous" href="index.php?p=15&rufuser=1&num_rdv='.$ligne['num_rdv'].'" onclick="return confirm(\'Etes Vous Sur de Vouloir Rufuser le Rendez-vous?\');">
                                        <i class="fas fa-times"></i></a>';

            $badge='<span class="badge badge-danger" style="width: 75px;">Rufusé <i class="fas fa-times"></i></a></span>';
        }else{

        $button2='<a class="btn-sm disabled btn btn-outline-danger my-2" title="Rufuser le Rendez-vous" href="index.php?p=15&rufuser=1&num_rdv='.$ligne['num_rdv'].'" onclick="return confirm(\'Etes Vous Sur de Vouloir Rufuser le Rendez-vous?\');">
                                        <i class="fas fa-times"></i></a>';

        $button='<a class="btn-sm disabled btn btn-outline-success my-2" title="Confirmer le Rendez-vous" href="index.php?p=15&confirmer=1&num_rdv='.$ligne['num_rdv'].'">
                                        <i class="fas fa-check-circle"></i></a>';
        $badge='<span class="badge badge-success" style="width: 75px;">Confirmé <i class="fas fa-check"></i></a></span>';

        }
    }

 echo  
		 
                     '<div class="row col-lg-12 text-center mx-1" style="border-bottom: solid 2px grey;">
                        <div class=" col-lg-1 d-none d-lg-block" style="line-height: 275%;">
                            '.$ligne['num_rdv'].'
                        </div>
                        <div class=" col-lg-2 col-md-3" style="line-height: 275%;">
                            '.$ligne['nom'].'
                        </div>
                        <div class=" col-lg-3 col-md-3 d-none d-lg-block" style="line-height: 275%;">
                            '.$ligne['prenom'].'
                        </div>
                        <div class="col-lg-1" style="line-height: 275%;">
                            '.$ligne['date_rdv'].'
                        </div>
                        <div class=" col-lg-1 col-md-3" style="line-height: 275%;">
                            '.$ligne['heure'].'
                        </div>
                        <div class=" col-lg-2 col-md-3" style="line-height: 275%;">
                            '.$badge.'
                        </div>
                        <div class="col-lg-2 col-md-3">
                            '.$button.'
                            '.$button2.'
                            <a class="btn-sm btn btn-danger my-2" title=" Supprimer le Rendez-vous" href="index.php?p=15&supprimer=1&num_rdv='.$ligne['num_rdv'].'" onclick="return confirm(\'Etes Vous Sur de Vouloir Supprimer le Rendez-vous?\');">
                                        <i class="fas fa-trash"></i></a>
                        </div>                        
                    </div>';   

}

}
else {
    echo '<div class=" col-lg-12 text-center mx-1" style="border-bottom: solid 2px grey;padding:20px">
                        <h4 class="text-center">Aucune Rendez-vous Trouvé</h4>                       
                    </div>';
}

?>