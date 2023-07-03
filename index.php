<?php
error_reporting(0); 
include("inc/fonction.inc.php");
define("_BASE_URL",TRUE);
if (isset ($_GET['p'])){
		$p=$_GET['p'];
switch ($p):
    case 1:
		$p=1;
        $nomp='Liste Des Consultations';
        include("pg/liste.consultations.php");
        break;
    case 2:
		$p=2;
        $nomp='Ajouter une consultation';
        include("pg/ajouter.php");
        break;
   	case 3:
		$p=3;
        $nomp="Modification d'une consultations";
        include("pg/modifier.php");
        break;
	case 4:
		$p=4;
        $nomp="Details d'une consultations";
        include("pg/detail.php");
        break;
	case 5:
		$p=5;
        $nomp="Se connecter";
        include("pg/login.php");
        break;
	case 6:
		$p=6;
		$nomp="Cabinet medical Dr Said Said - Acceil";
        include("pg/accueil.php");
        break;
	case 7:
		$p=7;
        $nomp="Impression...";
        include("pg/imprimer.php");
        break;
    case 8:
        $p=8;
        $nomp="liste des patients...";
        include("pg/liste.patients.php");
        break;
    case 9:
        $p=9;
        $nomp="Inscription";
        include("pg/inscription.php");
        break;
     case 10:
        $p=10;
        $nomp="Bienvenu";
        include("pg/loggedin.patient.php");
        break;
    case 11:
        $p=11;
        $nomp="logout";
        include("pg/logout.php");
        break;
    case 12:
        $p=12;
        $nomp="Modification du Compte";
        include("pg/compte.modification.php");
        break;
    case 13:
        $p=13;
        $nomp="Ajouter un Rendez-vous";
        include("pg/ajout.rdv.php");
        break;
    case 14:
        $p=14;
        $nomp="Détails Du Patient";
        include("pg/details.patient.php");
        break;
    case 15:
        $p=15;
        $nomp="Liste Des Rendez-vous";
        include("pg/liste.rdv.med.php");
        break;
    case 16:
        $p=16;
        $nomp="Liste Des Consultations";
        include("pg/liste.cons.pat.php");
        break;
    case 17:
        $p=17;
        $nomp="Détails d'une Consultations";
        include("pg/det.cons.pat.php");
        break;
    case 18:
        $p=18;
        $nomp="Impression...";
        include("pg/imp.fichepat.php");
        break;
    case 19:
        $p=19;
        $nomp="Présentation du Cabinet";
        include("pg/presentation.php");
        break;
    case 20:
        $p=20;
        $nomp="Contact";
        include("pg/contact.php");
        break;
    
    
    default:
		$p='';
        $nomp="Cabinet medical Dr F.Terbouk - Acceil";
        include("pg/accueil.php");
        
endswitch;
}
else{$p=''; $nomp="Cabinet medical Dr F.Terbouk - Acceil"; include("pg/accueil.php");}
		
?>