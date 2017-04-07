<?php
	$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
	$dico = explode("\n", $string);
		echo"Ce dictionnaire contient :".count($dico)."<br /><br />";
		$num = 0;
		$W = 'w';
		$Q = 'q';
		$nombrew = 0;
		$nombreq = 0;
		foreach ($dico as $key => $value) {
			if (strlen($value) == 15) {
				$num++;				
			}
		}
		echo"Les mots font exactement 15 caractères sont : ". ($num)."<br /><br />";

		foreach ($dico as $key => $value) {
			if (stripos($value, $W)){
				$nombrew++;
			}

		}
		echo "Les mots qui contiennent la lettre « w » sont : ". $nombrew."<br /><br />";

		foreach ($dico as $key => $value) {
			if (strripos($value, $Q)) {
				$nombreq++;
			}
		}
		echo "Les mots qui finissent par la lettre « q » sont : ".$nombreq;




?>