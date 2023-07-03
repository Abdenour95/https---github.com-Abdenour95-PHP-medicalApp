<?php
include("inc/fonction.inc.php");
include("inc/page.restriction.php");
session_start();


?>
<!DOCTYPE html>
<html>
    <?php
include("inc/h.inc.php");
?>
    <body style="overflow-x: hidden;">
               <?php
include("inc/nav_admin.inc.php");
include("inc/tri.cons.pat.php");
?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 py-2 text-dark" style="background-color: #dee2e6;">
                    <h4 class="m-1 text-center">
                        Mes Consultations 
                    </h4>
                    <hr>
                    <div class="float-right">
                        <div class="row">
                    		<div class="dropdown">
                        		<button aria-expanded="false" title="Trier La liste des Consultations" style="width: 140px;" aria-haspopup="true" class="btn btn-info dropdown-toggle m-1" data-toggle="dropdown" id="dropdownMenuButton" type="button">
                            		Trier Par
                        		</button>
                        		<div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
                            <a class="dropdown-item d-none d-lg-block" href="index.php?p=16&tri=1" >
                                Numéro
                            </a>
                            <a class="dropdown-item d-none d-lg-block" href="index.php?p=16&tri=2">
                                Motif
                            </a>
                            <a class="dropdown-item " href="index.php?p=16&tri=3">
                                Date
                            </a>
                        	</div>
                    		</div>
                            
                    		<div>
                            <a class="btn btn-info m-1" title="Actualiser La Liste des Consultations" href="index.php?p=16" style="width: 140px;">
                                Actualiser  <i class="fas fa-sync-alt"></i>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-12 text-center text-dark border border-bottom-0 border-left-0 border-top-0 bg-light search-height">
                    
					<form class="form-group text-left mx-auto" enctype="multipart/form-data" method="post" action="index.php?p=16" accept-charset="utf-8">
						<fieldset class="border rounded border-info p-3">
						<legend class="text-center font-weight-bold text-info">Rechercher</legend>
                        <input required="required" class="form-control" placeholder="Rechercher..." name="search" type="search"></input>
                        <label class="form-check-label">Filtrer Par:</label>
                        <div class="form-check" for="radio1">
                        <label class="form-check-label d-none d-lg-block" ><input class="form-check-input" type="radio" id="radio1" name="filtre" value="numero" checked="checked">Numéro</label>
                        </div>
                        <div class="form-check" for="radio2">
                        <label class="form-check-label d-none d-lg-block"><input class="form-check-input" type="radio" id="radio4" name="filtre" value="motif">Motif</label>
                        </div>
                        <div class="form-check" for="radio3">
                        <label class="form-check-label"><input class="form-check-input" type="radio" id="radio5" name="filtre" value="date_consultation">Date</label>
                        </div>
                        <button type="submit" title="Rechercher..." class="btn btn-info">Rechercher <i class="fas fa-search"></i></button>
                        </fieldset>
                    </form>
                </div>
                <div class="col-lg-10 col-sm-12 bg-light px-3 py-3">
                    <div class="mx-1">
					<?php 
                  if (isset ($_POST['search'])){
				  if (($_POST["search"])!=''){
					$search=$_POST['search'];
					$filtre=$_POST['filtre'];
					switch ($filtre):
								case 'numero':
                                    $print='Résultats De La Recherche Selon le Numéro :';
                                    break;
                                case 'motif':
                                    $print="Résultats De La Recherche Selon le Motif : ";
                                    break;
                                case 'date_consultation':
                                    $print='Résultats De La Recherche Selon la Date : ';
                                    break;
                                case '':
                                    echo'<h4 class="text-dark text-center my-2">veulillez saisir un mot dans le champ de recherche</h4>';
                                    break;
								default:
		                         echo'<h4 class="text-dark text-center my-2">veuillez saisir un mot dans le champ de recherche</h4>';
								 endswitch;
					 echo'<h4 class="text-dark text-center my-2 p-2">'.$print.' '.$search.' </h4>';
					}
					}
                    else {
                        echo '';
                    }
					?>
                    
                    </div>
                    <div  class="row col-lg-12 text-center justify-content-center border mx-auto align-items-center" style="overflow-y: scroll; max-height: 570px;">
                    <div class="row col-lg-12 text-center font-weight-bold mx-1" style="border-bottom: solid 2px grey;">
                        <div class="col-lg-3 ">
                            Num <?php echo $titre1;?>
                        </div>
                        <div class=" col-lg-3">
                            Motif <?php echo $titre2;?>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            Date <?php echo $titre3;?>
                        </div>
                        <div class=" col-lg-3 col-md-3">
                            Actions
                        </div>                        
                    </div>

                     
                    <?php 

		include("inc/bcl.cons.pat.php");
	   
		           ?>
  
                    </div> 
                </div>
                </div>
            </div>
        </div>
        <?php
include("inc/f.inc.php");
?>
    </body>
</html>