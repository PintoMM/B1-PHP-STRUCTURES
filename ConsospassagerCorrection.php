<?php

echo "Saisir la somme due par le passager :\n" ;
$sommeDue = rtrim( fgets( STDIN ) ) ;

if($sommeDue < 0){
	echo " Valeur inconnu\n" ;
}

elseif ($sommeDue > 0){ 
	echo "Le passager doit " , $sommeDue , " euros.\n" ;
}

else{
	echo " Le passager est acquitte de la somme .\n" ;
}



?>
