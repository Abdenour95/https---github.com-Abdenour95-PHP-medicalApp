
<?php
if (isset ($_GET['tri'])){

		$term=$_GET['tri'];
switch ($term):
    case 1:
		$critere ='matricule';
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
		$critere ='age';
		$titre4 = '<i class="fas fa-sort"></i>';
        break;

    default:
		$critere = 'matricule';$titre1 = '<i class="fas fa-sort"></i>';
               
endswitch;
}
else{$critere = 'matricule';$titre1 = '<i class="fas fa-sort"></i>';}
$requete = "SELECT * FROM patient ORDER BY $critere DESC ";		
?>