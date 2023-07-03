
<?php
if (isset ($_GET['tri'])){

		$term=$_GET['tri'];
switch ($term):
    case 1:
		$critere ='num_rdv';
		$titre1='<i class="fas fa-sort"></i>';
        break;
    case 2:
		$critere ='nom';
		$titre2 ='<i class="fas fa-sort"></i>';
        break;
   	case 3:
		$critere ='prenom';
		$titre3 ='<i class="fas fa-sort"></i>';
        break;
    case 4:
		$critere ='date_rdv';
		$titre4 ='<i class="fas fa-sort"></i>';
        break;
    case 5:
		$critere ='heure';
		$titre5 ='<i class="fas fa-sort"></i>';
        break;
    case 6:
		$critere ='etat';
		$titre6 ='<i class="fas fa-sort"></i>';
        break;

    default:
		$critere = 'num_rdv';$titre1 = '<i class="fas fa-sort"></i>';
               
endswitch;
}
else{$critere = 'num_rdv';$titre1 = '<i class="fas fa-sort"></i>';}
$requete = "SELECT * FROM rendez_vous, patient WHERE num_patient_rdv=matricule ORDER BY $critere DESC ";		
?>