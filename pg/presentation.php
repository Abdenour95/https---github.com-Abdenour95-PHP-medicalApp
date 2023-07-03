<!DOCTYPE html>
<html>
<?php
include("inc/h.inc.php");
?>
    <body style="overflow-x:hidden;  background-image: url(img/stethescope.jpg); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: 50% 50%;">
        <?php
            include("inc/nav_client.inc.php");
        ?>
        
        <div class="row" style="background-image: url(img/stethescope.jpg); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: 50% 50%;">
            
            <div class="col-12 shadow"  style="height: 200px; background-image: url(img/tension.jpg); background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-position: 50% -250px;">
                <h1 class="text-center text-light" style="text-shadow: 2px 1px 1px black; margin-top: 5%;">
                    Présentation Du Cabinet Médical
                </h1>
            </div>

            <div class="container bg-light border shadow">
               <div class="row p-2">
                   <dir class="col-lg-8 border border-top-0 border-left-0 border-bottom-0">
                       <h2 class="text-info">
                           Le Cabinet
                       </h2>
                       <hr>
                       <img src="img/gyn.jpg" class="img-thumbnail w-50 float-right" alt="">
                       <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in efficitur est. Etiam blandit lorem justo. Donec ultricies consectetur ex, eu tincidunt velit cursus sed. Donec suscipit a tellus ac sollicitudin. Proin lobortis nibh interdum ligula tincidunt, eget hendrerit nisl tempus. Phasellus magna enim, dapibus sit amet lorem non, accumsan maximus felis. Nam venenatis non nunc non tincidunt. Morbi ac rutrum neque. Curabitur ornare arcu venenatis, varius magna et, feugiat mi. Integer nec odio eget magna posuere scelerisque. Etiam a ornare quam.
                       </p>
                   <!--    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/carousel/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carousel/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carousel/3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Précédent</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Suivant</span>
  </a>
</div> -->
                       <h2 class="text-info">
                           Dr. F.Terbouk
                       </h2><hr>
                       <img src="img/dr.jpg" class="img-thumbnail w-50 float-right" alt="">
                       <p>
                           Dr.F Terbouk, titulaire d'un diplôme docteur en médecine, spécialiste gynécologie obstétrique de la faculté d'Alger 1 ben yousef ben khedda

                            Elle a travaillé comme gynécologue au sein de l'hôpital de theniya, wilaya de Boumerdes pendant 2 ans

                            Travaille comme libérale au sein de son propre cabinet médical depuis l'année 2002.
                       </p>
                   </dir>
                   <div class="col-lg-4">
                       <h2 class="text-info">
                           Horaires D'ouverture <i class="far fa-clock"></i>
                       </h2>
                       <p>
                           Le Cabinet est Ouvert de Samedi à Jeudi de <b>08:00</b> à <b>17:30</b><br> 
                       </p>
                       <fieldset class="border border-danger p-2">
                           <legend class="text-center text-danger">
                            <i class="fas fa-exclamation-triangle"></i>   Important <i class="fas fa-exclamation-triangle"></i>
                           </legend>
                           <p>
                               La Prise de Rendez-vous se fait <b>Enligne Uniquement</b><br>
                           Pour Prendre un Rendez-vous veulliez vous <a href="index.php?pg=9">Inscrire</a>.<br>
                            Si il s'agit de Votre Premiere inscription, <b>veulliez Informer</b> le Docteur Par <B>SMS</B> contenant Votre Nom, Prenom et Votre Numero Du Compte.
                           </p>
                       </fieldset>
                   </div>
               </div>
            </div>
            
        </div>

        <?php include("inc/f.inc.php");?>        
</html>