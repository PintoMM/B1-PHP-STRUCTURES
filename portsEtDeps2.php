<?php

echo "Saisir le nom du port :\n" ;
$nomport = strtolower(rtrim( fgets( STDIN )));

switch($nomport){
	case "quiberon":
		$nomDept = "Morbihan" ;
		break ;
	case "sauzon":
		$nomDept = "Morbihan" ;
		break ;
	case "le palais":
		$nomDept = "Morbihan" ;
		break ;
	case "concarneau":
		$nomDept = "Finistere" ;
		break ;
	case "douarnenez":
		$nomDept = "Finistere" ;
		break ;
	case "piriac-sur-mer":
		$nomDept = "Loire-Atlantique" ;
		break ;
	case "pornic":
		$nomDept = "Loire-Atlantique" ;
		break ;
	case "lle-d'yeu":
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
