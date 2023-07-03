

<?php

$matricule=$_SESSION['matricule'];

    if (isset ($_POST["filtre"])){$filtre=$_POST["filtre"];$search=$_POST["search"]; 
		$requete="SELECT * FROM consultation  WHERE num_patient=$matricule AND $filtre LIKE '%$search%'  ORDER BY $filtre ASC";}
		
// requête
$resultat = $mysqli->query($requete) or die ('Erreur '.$requete.' '.$mysqli->error);

if (mysqli_num_rows($resultat) > 0) {
    

//  boucle 
while ($ligne = $resultat->fetch_assoc()) {

 echo  
		 
                     '<div class="row col-lg-12 text-center mx-1" style="border-bottom: solid 2px grey;">
                        <div class=" col-lg-3 col-md-3 " style="line-height: 275%;">
                            '.$ligne['numero'].'
                        </div>
                        
                        <div class="col-lg-3" style="line-height: 275%;">
                            '.$ligne['motif'].'
                        </div>
                        <div class=" col-lg-3 col-md-3" style="line-height: 275%;">
                            '.$ligne['date_consultation'].'
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <a class="btn-sm btn btn-info my-2" title="Afficher les Détails" href="index.php?p=17&numero='.$ligne['numero'].'">
                                        <i class="fas fa-address-card"></i></a>
                        </div>                        
                    </div>';   

}

}
else {
    echo '<div class=" col-lg-12 text-center mx-1" style="border-bottom: solid 2px grey;padding:20px">
                        <h4 class="text-center">Aucune Consultation Trouvée</h4>                       
                    </div>';
}

?>