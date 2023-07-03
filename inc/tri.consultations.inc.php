
<?php
if (isset ($_GET['tri'])){

		$term=$_GET['tri'];
switch ($term):
    case 1:
		$critere ='numero';
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
		$critere ='motif';
		$titre4 = '<i class="fas fa-sort"></i>';
        break;
    case 5:
		$critere ='date_consultation';
		$titre5 = '<i class="fas fa-sort"></i>';
        break;

    default:
		$critere = 'numero';$titre1 = '<i class="fas fa-sort"></i>';
               
endswitch;
}
else{$critere = 'numero';$titre1 = '<i class="fas fa-sort"></i>';}
$requete = "SELECT * FROM consultation, patient WHERE num_patient=matricule ORDER BY $critere DESC ";		
?>