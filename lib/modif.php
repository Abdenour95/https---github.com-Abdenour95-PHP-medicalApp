<?php
error_reporting(E_ALL);
include("inc/fonction.inc.php");
if (isset($_POST["modif"])&& $_POST["modif"]<>''){
$id=$_POST["modif"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$age=$_POST["age"];
$adresse=$_POST["adresse"];
$sexe=$_POST["sexe"];
$tel=$_POST["tel"];
$mail=$_POST["mail"];
$motif=$_POST["motif"];
$descr=$_POST["descr"];
$d_cons=$_POST["d_cons"];
$h_cons=$_POST["h_cons"];
$d_p_cons=$_POST["d_p_cons"];
$h_p_cons=$_POST["h_p_cons"];


$modif="UPDATE consultation  SET nom='$nom',prenom='$prenom',age='$age',adresse='$adresse',sexe='$sexe',tel='$tel',mail='$mail',motif='$motif',descr='$descr',d_cons='$d_cons',h_cons='$h_cons',d_p_cons='$d_p_cons',h_p_cons='$h_p_cons' WHERE id_patient='$id'";
//
$mysqli->query($modif) or die ('Erreur '.$modif.' '.$mysqli->error);

	echo "<script type=\"text/javascript\">alert('La consultation a été modifié avec succés');</script>\n";
?>	
<meta http-equiv='Refresh' content='0; URL=detail.php?id=<?php echo $id ;?>'>
<?php

}

?>
<?php 
		include("inc/fonction.inc.php");
 
if (isset($_GET['id'])){ 
$id=$_GET['id'];}
		// on limite à 4 le nombre d'enregistrements souhaité
$requete = "SELECT * FROM consultation WHERE id_patient='$id'";
// envoi de la requête
$resultat = $mysqli->query($requete) or die ('Erreur '.$requete.' '.$mysqli->error);

// tant qu'il y a un enregistrement, les instructions dans la boucle s'exécutent
$ligne = $resultat->fetch_assoc();		
		?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Modification
        </title>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
                </link>
            </meta>
        </meta>
        <script defer src="lib/all.min.js"></script>

        <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="lib/jquery-3.3.1.slim.min.js">
        </script>
        <script crossorigin="anonymous" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" src="lib/popper.min.js">
        </script>
        <script crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" src="lib/bootstrap.min.js">
        </script>
    </head>
    <body style="overflow-x:hidden;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <a class="navbar-brand" href="#">
                <h3><span class="text-secondary">Dr.</span>Said Said</h3>
            </a>
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                             
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light" href="liste.php">
                            Liste des consultations
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            
                        </a>
                    </li>
                </ul>
                                <div class="row">

                    <a class="text-light mx-3" href="#"><h3><i class="fab fa-facebook-f"></h3></i></a>
                    <a class="text-light mx-3" href="#"><h3><i class="fab fa-linkedin""></h3></i></a>
                    <a class="text-light mx-3" href="#"><h3><i class="fab fa-viber"></h3></i></a>
                    <a class="text-light mx-3" href="#"><h3><i class="far fa-envelope"></h3></i></a>

                </div>
            </div>
        </nav>
        <div class="row px-2 py-2">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <h3>
                    Modifier la Consultation N°:<?php echo $ligne['id_patient'] ;?>
                </h3>
                 <form enctype="multipart/form-data" method="post" action="modif.php" accept-charset="utf-8">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="nom">
                                Nom: *
                            </label>
                            <input class="form-control" name="nom" value="<?php echo $ligne['nom'];?>" type="name" required>
                            </input>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="prénom">
                                Prénom: *
                            </label>
                            <input class="form-control" name="prenom" value="<?php echo $ligne['prenom'] ;?>" type="name" required>
                            </input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Sexe">
                            Sexe:
                        </label>
                        <select class="form-control" name="sexe" required>
                            <option selected="selected">
                                <?php echo $ligne['sexe'] ;?>
                            </option>
                            <option>
                                Masculin         
                            </option>
                            <option>
                                Féminin
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="age">
                            Age: *
                        </label>
                        <input class="form-control" name="age" value="<?php echo''.$ligne['age'].'';?>" type="number" required>
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="Adresse">
                            Adresse:
                        </label>
                        <textarea class="form-control" name="adresse"  type="adress" required minlength="10"><?php echo $ligne['adresse'] ;?></textarea>
                        <small class="form-text text-muted">
                            Entrez au moins 10 caractères.
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="numtel">
                            Numéro de téléphone: *
                        </label>
                        <input class="form-control" size="10" name="tel" placeholder="<?php echo $ligne['tel'] ;?>" value="<?php echo''.$ligne['tel'].'';?>"type="number" required>
                        </input>
                        <small class="form-text text-muted">
                            10 caractères.
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="email">
                            E-mail: *
                        </label>
                        <input class="form-control" name="mail" required value="<?php echo $ligne['mail'] ;?>" type="email">
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="Catégorie">
                            Motif de Consultation: *
                        </label>
                        <select class="form-control" name="motif" required>
                            <option selected="selected">
                                <?php echo $ligne['motif'] ;?>
                            </option>
                            <option>
                                Immunologie
                            </option>
                            <option>
                                Aandrologie
                            </option>
                            <option>
                                Chirurgie
                            </option>
                            <option>
                                Dermatologie
                            </option>
                            <option>
                                Endocrinologie
                            </option>
                            <option>
                                Gastro-entérologie
                            </option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label>
                                Date de Consultation: *
                            </label>
                            <input required class="form-control" name="d_cons" type="date" min="2019-01-01" max="2019-12-31" value="<?php echo $ligne['d_cons'];?>">
                            </input>
                            <small class="form-text text-muted">
                                Date doit etre entre 2019-01-01 et 2019-12-31
                            </small>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>
                                Heure de Consultation: *
                            </label>
                            <input class="form-control" name="h_cons" type="text" pattern="(08|09|10|11|12|13|14|15|16):[0-5]{1}[0-9]{1}" value="<?php echo $ligne['h_cons'];?>">
                            </input>
                            <small class="form-text text-muted">
                                Heure doit etre entre 08:00 et 16:59, Format HH:MM.
                            </small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label>
                                Date de la prochaine Consultation:
                            </label>
                            <input class="form-control" required name="d_p_cons" type="date" min="2019-01-01" max="2019-12-31" value="<?php echo $ligne['d_p_cons'];?>">
                            </input>
                            <small class="form-text text-muted">
                                Date doit etre entre 2019-01-01 et 2019-12-31
                            </small>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>
                                Heure de la prochaine Consultation:
                            </label>
                            <input class="form-control" name="h_p_cons" type="text" pattern="(08|09|10|11|12|13|14|15|16):[0-5]{1}[0-9]{1}" value="<?php echo $ligne['h_p_cons'];?>">
                            </input>
                            <small class="form-text text-muted">
                                Heure doit etre entre 08:00 et 16:59, Format HH:MM.
                            </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>
                            Déscriptif de la consultation : *
                        </label>
                        <textarea class="form-control" required name="descr" placeholder="Enter un texte..."><?php echo $ligne['descr'] ;?>
                        </textarea>
                        <small class="form-text text-muted">
                            (*) champs obligatoires.
                        </small>
                    </div>
                <input name="modif" type="hidden" value="<?php echo''.$ligne['id_patient'].'';?>"
                <div class="float-right">
                <a class="btn btn-danger" href="liste.php"><i class="fas fa-arrow-left"></i> Annuler</a>
                <button type="submit" class="btn btn-success" onclick="return confirm('êtes-vous sur de vouloir modifier cette consultation?');"><i class="fas fa-save"></i> Appliquer les modification</button>
				</form>
                </div>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
        <footer class="bg-secondary text-light row px-2 py-2">

            <div class="col-lg-4">

                <h3><span class="text-info">Dr.</span>Said Said</h3>
                <nav class="navbar navbar-expand navbar-dark">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="liste.php">
                            Liste des consultations
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            
                        </a>
                    </li>
                </ul>
            
        </nav>
            </div>

            <div class="col-lg-4">

                <div class="row">
                    <h3><i class="fa fa-map-marker mx-3"></i></h3>
                    <p>01 Rue Krim Belkacem Tizi Ouzou, Algérie</p>
                </div>

                <div class="row">
                    <h3><i class="fa fa-phone mx-3"></i></h3>
                    <p>0 555 123 456</p>
                </div>

                <div class="row">
                    <h3><i class="fa fa-envelope mx-3"></i></h3>
                    <a class="text-light" href="mailto:support@company.com">zoheirock@gmail.com</a>
                </div>

            </div>

            <div class="col-lg-4">

                <p>
                    Liens et réseaux sociaux
                </p>

                <div class="row">

                    <a class="text-light mx-3" href="#"><h3><i class="fab fa-facebook-f"></h3></i></a>
                    <a class="text-light mx-3" href="#"><h3><i class="fab fa-linkedin""></h3></i></a>
                    <a class="text-light mx-3" href="#"><h3><i class="fab fa-viber"></h3></i></a>
                    <a class="text-light mx-3" href="#"><h3><i class="far fa-envelope"></h3></i></a>

                </div>

            </div>

        </footer>
    </body>
</html>
