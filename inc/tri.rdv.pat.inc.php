
<?php
if (isset ($_GET['tri'])){

		$term=$_GET['tri'];
switch ($term):
    case 1:
		$critere ='num_rdv';
		$titre1='<i class="fas fa-sort"></i>';
        break;
    case 2:
		$critere ='date_rdv';
		$titre2 ='<i class="fas fa-sort"></i>';
        break;
   	case 3:
		$critere ='etat';
		$titre3 ='<i class="fas fa-sort"></i>';
        break;

    default:
		$critere = 'num_rdv';$titre1 = '<i class="fas fa-sort"></i>';
               
endswitch;
}
else{$critere = 'num_rdv';$titre1 = '<i class="fas fa-sort"></i>';}
$requete = "SELECT * FROM rendez_vous WHERE num_patient_rdv='$num_pat_rdv' ORDER BY $critere DESC ";		
?>