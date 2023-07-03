
<?php
if (isset ($_GET['tri'])){

		$term=$_GET['tri'];
switch ($term):
    case 1:
		$critere ='numero';
		$titre1='<i class="fas fa-sort"></i>';
        break;
    case 2:
		$critere ='motif';
		$titre2 ='<i class="fas fa-sort"></i>';
        break;
   	case 3:
		$critere ='date_consultation';
		$titre3 ='<i class="fas fa-sort"></i>';
        break;

    default:
		$critere = 'numero';$titre1 = '<i class="fas fa-sort"></i>';
               
endswitch;
}
else{$critere = 'numero';$titre1 = '<i class="fas fa-sort"></i>';}

$matricule=$_SESSION['matricule'];

$requete = "SELECT * FROM consultation WHERE num_patient=$matricule ORDER BY $critere DESC ";		
?>