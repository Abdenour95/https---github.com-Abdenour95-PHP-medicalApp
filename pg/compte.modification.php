<?php
include("inc/page.restriction.php");
session_start();

$identifiant = $_SESSION['login_user'];


if (isset($_POST["modifier"])&& $_POST["modifier"]<>''){
$matricule=$_POST['modifier'];
$id=$_POST["id"];
$password=$_POST["password"];
$confirm_password=$_POST["confirm_password"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$age=$_POST["age"];
$adresse=$_POST["adresse"];
$numtel=$_POST["numtel"];
$email=$_POST["email"];

$erreur=0;

if ($password != $confirm_password) {
    $erreur=2;
}else{

$verification="SELECT id FROM patient where id = '$id' and matricule <> '$matricule'";
$res_vef=$mysqli->query($verification) or die ('Erreur '.$verification.' '.$mysqli->error);

if (mysqli_num_rows($res_vef) > 0) {
    $erreur=1;
}else{

// sql 
$modifier="UPDATE patient SET id='$id', password='$password', nom='$nom', prenom='$prenom', age='$age', adresse='$adresse', numtel='$numtel', email='$email' WHERE matricule='$matricule' ";

$mysqli->query($modifier) or die ('Erreur '.$modifier.' '.$mysqli->error);

	echo "<script type=\"text/javascript\">alert('Le compte a été modifié avec succés');</script>\n";
?>	
<meta http-equiv='Refresh' content='0; URL=index.php?p=12&matricule=<?php echo $matricule; ?>'>
<?php

}

}

}

if (isset($_GET['matricule'])){

    $matricule=$_GET['matricule'];
}

$requete = "SELECT * FROM patient WHERE matricule='$matricule'";
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
include("inc/nav_admin.inc.php");
?>
        <div class="row px-2">
            <div class="col-lg-12 text-dark" style="background-color: #dee2e6;">
                    <h2 class="m-3 text-center">
                        Modification du Compte
                    </h2>
                </div>
            <div class="col-lg-3">
            </div>
            <div id="haut" class="col-lg-6 p-3 my-2" style="background-color: white;">
                <br>
                <form enctype="multipart/form-data" method="post" action="index.php?p=12" accept-charset="utf-8">
                    <fieldset class="form-group border rounded border-info p-3">
                        <legend class="text-center font-weight-bold text-info" style="font-size: 20px;">Informations D'Authentification</legend>
                        
                        <?php 

                            if ($erreur == 1) { 
                                echo '<div class="alert alert-danger">
                                    <strong>Erreur!</strong> Identifiant Existe déja.
                                </div>';
                            }
                            if ($erreur == 2) { 
                                echo '<div class="alert alert-danger">
                                    <strong>Erreur!</strong> Mots de Passe Non Identiques.
                                </div>';
                            }

                        ?>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="nom">
                                Identifiant: *
                            </label>
                            <input class="form-control" name="id" minlength="8" placeholder="Entrer votre Identifiant..." type="name"  value="<?php echo $ligne['id']; ?>" required="required">
                            </input>
                            <small class="form-text text-muted">
                            Entrez Au moins 8 Caractères.
                        </small>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="prénom">
                                Mot de Passe: *
                            </label>
                            <input class="form-control" name="password" placeholder="Entrer votre Mot de Pass..." type="password" required="required" minlength="8">
                            </input>
                            <small class="form-text text-muted">
                            Entrez Au moins 8 Caractères.
                        </small>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="prénom">
                               Confirmation du Mot de Passe: *
                            </label>
                            <input class="form-control" name="confirm_password"  placeholder="Confirmer votre Mot de Pass..." type="password" required="required" minlength="8">
                            </input>
                            <small class="form-text text-muted">
                            Entrez Au moins 8 Caractères.
                        </small>
                        </div>
                    </div>
                    </fieldset>
                    <fieldset class="form-group border rounded border-info p-3">
                        <legend class="text-center font-weight-bold text-info" style="font-size: 20px;">Informations Personnelles du Patient</legend>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="nom">
                                Nom: *
                            </label>
                            <input class="form-control" name="nom" placeholder="Entrer le Nom..." type="name" value="<?php echo $ligne['nom']; ?>" required="required">
                            </input>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="prénom">
                                Prénom: *
                            </label>
                            <input class="form-control" name="prenom" placeholder="Entrer le prénom..." type="name" value="<?php echo $ligne['prenom']; ?>" required="required">
                            </input>
                        </div>
                    
                    <div class="form-group col-lg-6">
                        <label for="age">
                            Age: *
                        </label>
                        <input class="form-control" name="age" placeholder="Entrer l'age..." type="text" pattern="^0?[0-9]?[0-9]$|^(100)$" value="<?php echo $ligne['age']; ?>" required="required">
                        </input>
                        <small class="form-text text-muted">
                            Age Entre 0 Et 100.
                        </small>
                    </div>
                    
                    <div class="form-group col-lg-12">
                        <label for="Adresse">
                            Adresse: *
                        </label>
                        <textarea class="form-control" name="adresse" placeholder="Entrer l'Adresse..." type="adress" required="required" minlength="10"><?php echo $ligne['adresse']; ?></textarea>
                        <small class="form-text text-muted">
 							Entrez Au moins 10 Caractères.
						</small>
                    </div>
                    <div class="form-group col-lg-5">
                        <label for="numtel">
                            Numéro De téléphone: *
                        </label>
                        <input class="form-control" name="numtel" placeholder="Entrer Le Numéro de téléphone" type="text" value="<?php echo $ligne['numtel']; ?>" pattern="^[0]{1}[0-9]{9}$" required="required">
                        </input>
                        <small class="form-text text-muted">
 							10 Caractères, Format 0123456789
						</small>
                    </div>
                    <div class="form-group col-lg-7">
                        <label for="email">
                            E-mail: *
                        </label>
                        <input class="form-control" name="email" placeholder="Entrer L'e-mail..." type="email" value="<?php echo $ligne['email']; ?>" required="required">
                        </input>
                    </div>
                    </div>
                    </fieldset>
                <input name="modifier" type="hidden" value="<?php echo''.$ligne['matricule'].'';?>">
                <div class="float-right">
                    <a class="btn btn-info" title="Annuler..." href="index.php?p=10"><i class="fas fa-arrow-left"></i> Annuler</a>
                    <button type="submit" title="Appliquer les Modifications" class="btn btn-info"><i class="fas fa-save" onclick="return confirm('êtes-vous sur de vouloir modifier cette consultation?');"></i> Appliquer</button>
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
