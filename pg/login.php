 <?php 
    include("inc/fonction.inc.php");
    session_start();
   
        $error=0;
        if (isset($_POST['id']) && isset($_POST['password'])){
          
          $id = $_POST['id'];
          $password = $_POST['password'];

          if ($id=="medecin" && $password=="123456789") {

              $_SESSION['login_user'] = $id;

              header("location: index.php?p=8");
             
          }
          else{

              $error = 0;

              $requette_login="SELECT id, password, matricule FROM patient where id = '$id' and password = '$password'";

              $result = $mysqli->query($requette_login) or die ('Erreur'.$requette_login.' '.$mysqli->error);
        
              $informations=$result->fetch_assoc();

          

              if(($id == $informations['id']) && ($password == $informations['password'])) {
            
                $_SESSION['login_user'] = $id;
                $_SESSION['matricule'] = $informations['matricule'];
             
                header("location: index.php?p=10");
              }
              else {
                $error = 1;
              }
        }
      }
?>

<!DOCTYPE html>
<html>
<?php
include("inc/h.inc.php");
?>
    <body style="overflow-x:hidden;">
<?php
include("inc/nav_client.inc.php");
?>
            <div class="row justify-content-center px-3" style="background-image: url(img/stethescope.jpg); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: 50% 50%;">

                <div class="col-lg-12 text-dark" style="background-color: #dee2e6;">
                    <h2 class="m-3 text-center">
                        Connexion 
                    </h2>
                </div>

                <form class="col-lg-6 bg-light py-3 m-2 search-height" action="" method="post">
                    <?php  if ($error == 1) {
                        
                    
                        echo '<div class="alert alert-danger">
                            <strong>Erreur!</strong> Mot de passe ou Identifiant incorrect.
                        </div>';

                        }
                    ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Identifiant:</label>
                    <input type="text" class="form-control" name="id" placeholder="Entrez votre Identifiant...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mot De Passe:</label>
                    <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                    <small class="form-text text-muted">
                            <a href="#">Mot de Passe Oublié ? Cliquer ici Ou Contacter le Medecin.</a>
                  </div>
                  <div class="form-group float-right">
                  <button type="submit" value="submit" class="btn btn-info" style="width: 140px;">Se Connecter <i class="fas fa-sign-in-alt"></i></button>
                  <a href="index.php?p=9" class="btn btn-outline-info" style="width: 140px;">Inscription <i class="fas fa-user-plus"></i></a>
                  </div>
                </form>
            </div>
        </div>
        <?php
include("inc/f.inc.php");
?>
</html>