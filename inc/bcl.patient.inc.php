

<?php

if (isset($_GET['delete'])){
$ident=$_GET['id'];
$supprimer= "DELETE FROM patient WHERE matricule='$ident'";
$mysqli->query($supprimer) or die ('Erreur '.$supprimer.' '.$mysqli->error);

}


    if (isset ($_POST["filtre"])){$filtre=$_POST["filtre"];$search=$_POST["search"]; 
		$requete="SELECT * FROM patient WHERE  $filtre LIKE '%$search%'  ORDER BY $filtre ASC";}
		
// requête
$resultat = $mysqli->query($requete) or die ('Erreur '.$requete.' '.$mysqli->error);

if (mysqli_num_rows($resultat) > 0) {
    

//  boucle 
while ($ligne = $resultat->fetch_assoc()) {

 echo  
		 
                     '<div class="row col-lg-12 text-center mx-1" style="border-bottom: solid 2px grey;">
                        <div class=" col-lg-1 d-none d-lg-block" style="line-height: 275%;">
                            '.$ligne['matricule'].'
                        </div>
                        <div class=" col-lg-3 col-md-3" style="line-height: 275%;">
                            '.$ligne['nom'].'
                        </div>
                        <div class=" col-lg-3 col-md-3" style="line-height: 275%;">
                            '.$ligne['prenom'].'
                        </div>
                        <div class="col-lg-1 d-none d-lg-block" style="line-height: 275%;">
                            '.$ligne['age'].'
                        </div>
                        <div class=" col-lg-2 col-md-3" style="line-height: 275%;">
                            '.$ligne['numtel'].'
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <a class="btn-sm btn btn-info my-2" title="Afficher les Détails" href="index.php?p=14&matricule='.$ligne['matricule'].'">
                                        <i class="fas fa-address-card"></i></a>
                            
                        </div>                        
                    </div>';   

}

}
else {
    echo '<div class=" col-lg-12 text-center mx-1" style="border-bottom: solid 2px grey;padding:20px">
                        <h4 class="text-center">Aucune Patient Trouvé</h4>                       
                    </div>';
}

?>