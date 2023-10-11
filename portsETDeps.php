<?php

echo "Saisir le nom du port :\n" ;
$nomport = rtrim( fgets( STDIN ) ) ;

switch($nomport){
	case "Quiberon":
		$nomDept = "Morbihan" ;
		break ;
	case "Sauzon":
		$nomDept = "Morbihan" ;
		break ;
	case "Le Palais":
		$nomDept = "Morbihan" ;
		break ;
	case "Concarneau":
		$nomDept = "Finistere" ;
		break ;
	case "Douarnenez":
		$nomDept = "Finistere" ;
		break ;
	case "Piriac-sur-mer":
		$nomDept = "Loire-Atlantique" ;
		break ;
	case "Pornic":
		$nomDept = "Loire-Atlantique" ;
		break ;
	case "Ile-d'Yeu":
		$nomDept = "Vendee" ;
		break ;
	default :
		$nomDept = "Port non desseervi" ;
		break ;
}

if( $nomport == "inconnu" ){
	echo "Port non deservi" ;
}

else{ 
	echo " Departement :" , $nomDept ;
}
?>
