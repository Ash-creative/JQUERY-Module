<?php
header("Content-type: application/json");

// Si le login = Ash & Mot de passe = 12345 alors on retourne ces informations
if (($_POST["login"]=="Ash")&&($_POST["mdp"]=="12345")) {
    $retour["nom"]="Saint-Hilaire";
    $retour["prenom"]="Antoine";
    $retour["promotion"]="1992";

// Sinon on retourne inconnu
} else {
    $retour["nom"]="Inconnu";
    $retour["prenom"]="Inconnu";
    $retour["promotion"]="Indéterminé";
}

// On renvoie le tout dans un tableau en json dans la variable retour
echo json_encode(array("answer"=>$retour))
?>