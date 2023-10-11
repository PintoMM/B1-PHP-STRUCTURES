<?php
echo "Saisir la vitesse du bateau :\n" ;
$vitesseSaisie = rtrim( fgets( STDIN ) ) ;

if($vitesseSaisie > 0){
	echo " Vitesse :" , $vitesseSaisie , " Noeuds\n" ;
}

else{
	echo " Vitesse : 0 ";
}

?>
