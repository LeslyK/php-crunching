<?php
	$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
	$brut = json_decode($string, true);
	$top = $brut["feed"]["entry"]; # liste de films
	$top100 = count($top);


	echo "Top des 10 films:<br /><br />";
	// $top_10 = 1;
	// 	foreach ($top as $key => $value) {
	// 		echo $top_10." ".$value["im:name"]["label"]."<br/>";
	// 		$top_10++;
	// 		if ($top_10 > 10) {
	// 			break;
	// 		}
	// 	} 
		for ($i=1; $i <=10 ; $i++) { 
			$titre = $top[$i]["im:name"]["label"];
			echo $i.' '.$titre."<br /><br />";
		}
		echo "clessement film <br />";  
		for ($i=0; $i < 100; $i++) { 
			$titre = $top[$i]['title']["label"];
			if ($titre ==='Gravity - Alfonso Cuarón') {
				echo 'le classement du film est: '. $i.'<br /><br />';
				
			}
		}

		echo  "Realisateur du film Lego the movie <br />";
		for ($i=0; $i<$top100; $i++){ 
			$titre = $top[$i]['im:name']["label"];
			if($titre == "The LEGO Movie"){
				echo 'les réalisateurs du film lego the movie sont '.$top[$i]["im:artist"]["label"];


			}
		}

		echo "Le nombres de films sorties avant 2000 <br />";
		$nbFilms=0;
		for ($i=0; $i < $top100; $i++) { 
			$date =  $top[$i]['im:releaseDate']["label"];
			if (date_parse($date)['year']<2000) {
				$nbFilms++;
			}
		}
		echo "Le nombres de films sorties avant 2000 est de ".$nbFilms.'<br /><br />';
		echo "Film plus récent".'<br />';
		for ($i=0; $i <$top100; $i++) { 
			if ($i==0) {
				$filmRecent=$top[$i];
			}
			else{
				$date = $top[$i]['im:releaseDate']["label"];
				$filmPeutRecent = $filmRecent['im:releaseDate']["label"];
				if ($date>$filmPeutRecent) {
					$filmRecent = $top[$i];
				}
			}
		}
		echo 'le film le plus récent du classement est '. $filmRecent['im:name']["label"];

	
?>