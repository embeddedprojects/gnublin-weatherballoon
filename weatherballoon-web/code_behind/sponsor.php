<?php
//******************************************************************
// Datei: 			sponsor
// Beschreibung: 	Fuegt einen neuen Sponsor hinzu.
// Autor: 			Patrick Vogt, am 30.07.2013
// MatrikelNr: 		924789
//******************************************************************
if ($db->open()) {
	$params = array(":name" => utf8_encode($_POST["name"]), ":thanks" => utf8_encode($_POST["thanks"]), ":link" => $_POST["link"]);
	$bool = $db->query("INSERT INTO sponsors (name, thanks, link) VALUES (:name, :thanks, :link)", $params);
	$db->close();
	
	if ($bool) {
		alert("alert-success", "Erfolg!", "Der Sponsor wurde erfolgreich angelegt.");
	} else {
		alert("alert-error", "Fehler!", "Der Sponsor konnte nicht angelegt werden.");
	}
} else {
	alert("alert-error", "Fehler!", "Die Datenbank konnte nicht ge&ouml;ffnet werden.");
}
?>