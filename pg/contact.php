<!DOCTYPE html>
<html>
<?php
include("inc/h.inc.php");
?>
    <body style="overflow-x:hidden;">
        <?php
            include("inc/nav_client.inc.php");
        ?>
        
        <div class="row bg-white">
            
            <div class="col-12 j"  style="height: 200px; background-image: url(img/desk.jpg); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: 50% -250px;">
                <h1 class="text-center text-light" style="text-shadow: 2px 1px 1px black; margin-top: 5%;">
                    Contact et Informations
                </h1>
            </div>

            <div class="container-fluid bg-light border shadow">
               <div class="row p-5">
                   <dir class="col-lg-8 border border-top-0 border-left-0 border-bottom-0">
                       <h2 class="text-info">
                           Contactez Nous
                       </h2>
                       <hr>
                       <form>
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nom et Prénom:</label>
                    <input type="text" class="form-control" name="nomprenom" placeholder="Entrez votre Nom et Prénom...">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">E-Mail:</label>
                    <input type="email" class="form-control" name="Email" placeholder="Entrez votre E-Mail...">
                    </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Sujet:</label>
                    <input type="text" class="form-control" name="sujet" placeholder="Entrez un Sujet...">
                    </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Message:</label>
                    <textarea type="text" class="form-control" name="message" placeholder="Entrez un Message..."></textarea>
                    </div>
                    </div>
                    <div class="col-lg-12">
                    <a class="btn btn-info float-right" href="#">Enovyer <i class="fas fa-envelope"></i></a>
                    </div>
                  </div>
                </form>
                   </dir>
                   <div class="col-lg-4">
                       <h2 class="text-info">
                        Adresse et Contact
                       </h2>
                      <p><i class="fa fa-map-marked-alt fa-2x text-info"></i> Cité 104 Logements, Bâtiment N: 01 ,Issers-Boumerdès.</p><br>
                      <img src="img/map.jpg" class="img-thumbnail"><br>
                      <div class="p-2">
                      <p><i class="fa fa-phone fa-2x text-info"></i> 0 123 456 789</p>
                      <p><i class="fa fa-envelope fa-2x text-info"></i> Cité 104 Logements, Bâtiment N: 01 ,Issers-Boumerdès.</p>
                      </div>
                   </div>
               </div>
            </div>
            
        </div>

        <?php include("inc/f.inc.php");?>        
</html>