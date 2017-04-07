<?php
	$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
	$dico = explode("\n", $string);
	$mot ;
	$compteur=1;
	//print_r(str_split($mot));
	foreach ($dico as $dico_key => $dico_value) {
			if (strlen($dico_value)==15) {
				echo (explode(',' , $mot[66])."<br />");
				//array_unique($dico_value);
				//echo $dico_value."<br />";
				
				//explode($dico_value);
				//echo $compteur++." ".$dico_value.'<br />';
				//$mot=$dico_value;
			}
			

	}

?>

<!-- $machin = '1,5,4,7,9';
$truc = '1,2,3,4,10';
 
$array = explode(',', $machin.','.$truc);
$array = array_unique($array);
 
$unique = implode(',', $array); -->