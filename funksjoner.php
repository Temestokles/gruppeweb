<?php

function hentKommentarerUteliv($filnavn){
	if(empty($filnavn)){
		die("Du må spesifisere filnavn");
	}

	$fil = count(file("CommentsUteliv/".$filnavn));

	if($fil != 0){
		$json = json_decode(file_get_contents("CommentsUteliv/".$filnavn));

		$kommentarHTML = "";

		if(!empty($json)){
			foreach($json as $kommentar){
				$kommentarHTML .= "<p class='kommentar'>";
				$kommentarHTML .= "<strong>Navn:</strong> {$kommentar->navn}<br>";
				$kommentarHTML .= "<strong>Kommentar:</strong> {$kommentar->comment_text}";
				$kommentarHTML .= "</p>";
			}			
		} else {
			echo "En feil har oppstått, JSON er: ".print_r($json);
		}


		return $kommentarHTML;
	} 
	else {
		return "<p>Ingen kommentarer enda.</p>";
	}
	
}

function skrivKommentarUteliv($filnavn, $navn, $kommentar){
	/*if(empty($filnavn) || empty($navn) || empty($kommentar)){
		die("Du må kalle på skrivKommentar-funksjonen riktig");
	}*/

	$kommentarer = json_decode(file_get_contents("CommentsUteliv/".$filnavn), true);
	$kommentarer[] = array("navn" => $navn, "comment_text" => $kommentar);

	file_put_contents("CommentsUteliv/".$filnavn, json_encode($kommentarer));
}


//funksjoner til restauranter 
function hentKommentarerRestauranter($filnavn2){
	if(empty($filnavn2)){
		die("Du må spesifisere filnavn");
	}

	$fil1 = count(file("CommentsRestauranter/".$filnavn2));

	if($fil1 != 0){
		$json = json_decode(file_get_contents("CommentsRestauranter/".$filnavn2));

		$kommentarHTML = "";

		if(!empty($json)){
			foreach($json as $kommentar){
				$kommentarHTML .= "<p class='kommentar'>";
				$kommentarHTML .= "<strong>Navn:</strong> {$kommentar->navn}<br>";
				$kommentarHTML .= "<strong>Kommentar:</strong> {$kommentar->comment_text}";
				$kommentarHTML .= "</p>";
			}			
		} else {
			echo "En feil har oppstått, JSON er: ".print_r($json);
		}


		return $kommentarHTML;
	} else {
		return "<p>Ingen kommentarer enda.</p>";
	}
	
}

function skrivKommentarRestauranter($filnavn2, $navn, $kommentar){
	/*if(empty($filnavn2) || empty($navn2) || empty($kommentar2)){
		die("Du må kalle på skrivKommentar-funksjonen riktig");
	}*/
	$kommentarer = json_decode(file_get_contents("CommentsRestauranter/".$filnavn2), true);
	$kommentarer[] = array("navn" => $navn, "comment_text" => $kommentar);

	file_put_contents("CommentsRestauranter/".$filnavn2, json_encode($kommentarer));
}
?>