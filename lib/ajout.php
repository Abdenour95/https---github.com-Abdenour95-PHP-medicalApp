<?php
error_reporting(0);
include("inc/fonction.inc.php");
if (isset($_POST["send"])&& $_POST["send"]<>''){
$date_ajout = date("y.m.d");
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

// sql 
$ajout="INSERT INTO consultation (nom,prenom,age,adresse,sexe,tel,mail,motif,descr,d_cons,h_cons,d_p_cons,h_p_cons) VALUES ('$nom','$prenom','$age','$adresse','$sexe','$tel','$mail','$motif','$descr','$d_cons','$h_cons','$d_p_cons','$h_p_cons')";

$mysqli->query($ajout) or die ('Erreur '.$ajout.' '.$mysqli->error);

	echo "<script type=\"text/javascript\">alert('La consultation a été ajouté avec succés');</script>\n";
?>	
<meta http-equiv='Refresh' content='0; URL=liste.php'>
<?php

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Ajouter une consultation
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
                    Ajouter une Consultation:
                </h3>
                <form enctype="multipart/form-data" method="post" action="ajout.php" accept-charset="utf-8">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="nom">
                                Nom: *
                            </label>
                            <input class="form-control" name="nom" placeholder="Enter le Nom..." type="name" required="required">
                            </input>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="prénom">
                                Prénom: *
                            </label>
                            <input class="form-control" name="prenom" placeholder="Enter le prénom..." type="name" required="required">
                            </input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Sexe" >
                            Sexe*:
                        </label>
                        <select class="form-control" name="sexe" required="required">
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
                        <input class="form-control" name="age" placeholder="Enter l'age..." type="number" required="required" minlength="1" maxlength="3">
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="Adresse">
                            Adresse: *
                        </label>
                        <textarea class="form-control" name="adresse" placeholder="Enter l'Adresse..." type="adress" required="required" minlength="10"></textarea>
                        <small class="form-text text-muted">
 							Entrez au moins 10 caractères.
						</small>
                    </div>
                    <div class="form-group">
                        <label for="numtel">
                            Numéro de téléphone: *
                        </label>
                        <input class="form-control" name="tel" placeholder="Enter Le Numéro de téléphone" type="number" required="required" size="10">
                        </input>
                        <small class="form-text text-muted">
 							10 caractères.
						</small>
                    </div>
                    <div class="form-group">
                        <label for="email">
                            E-mail: *
                        </label>
                        <input class="form-control" name="mail" placeholder="Enter L'e-mail..." type="email" required="required">
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="Catégorie">
                            Motif de Consultation: *
                        </label>
                        <select class="form-control" name="motif" required="required">
                            <option value="">
                                Séléctionnez un motif...
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
                            <input class="form-control" name="d_cons" type="date" required="required" min="2019-01-01" max="2019-12-31">
                            </input>
                            <small class="form-text text-muted">
 								Date doit etre entre 2019-01-01 et 2019-12-31
							</small>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>
                                Heure de Consultation: *
                            </label>
                            <input class="form-control" name="h_cons" type="text" placeholder="HH:MM" pattern="(08|09|10|11|12|13|14|15|16):[0-5]{1}[0-9]{1}"></input>
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
                            <input class="form-control" name="d_p_cons" type="date"required="required" min="2019-01-01" max="2019-12-31">
                            </input>
                            <small class="form-text text-muted">
 								Date doit etre entre 2019-01-01 et 2019-12-31.
							</small>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>
                                Heure de la prochaine Consultation:
                            </label>
                            <input class="form-control" name="h_p_cons" type="text" placeholder="HH:MM" pattern="(08|09|10|11|12|13|14|15|16):[0-5]{1}[0-9]{1}"></input>
                            <small class="form-text text-muted">
 								Heure doit etre entre 08:00 et 16:59 Format HH:MM.
							</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>
                            Déscriptif de la consultation: *
                        </label>
                        <textarea class="form-control" name="descr" placeholder="Enter un text..." required="required"></textarea>
                        <small class="form-text text-muted">
 							(*) champs obligatoires.
						</small>
                    </div>
                <input type="hidden" value="send" name="send"></input>
                <div class="float-right">
                <a class="btn btn-danger" href="liste.php"><i class="fas fa-arrow-left"></i> Annuler</a>
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Enregister</button>
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
