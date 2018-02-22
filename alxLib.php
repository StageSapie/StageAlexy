<?php
/*
 * La Librairie de functions d'Alexy
 *
 * pour l'utiliser dans un fichier .php
 * simplement
 *  include("alxLib.php")
 *
 * puis appeler les functions
 *  getHead("mon titre");
 * 
 */

function getHead($titlehead){

	if (empty($titlehead)) {
		$titlehead = 'Vente de Jeux Videos en Ligne';
	}

    // la variable qui contiendra notre html
    $result="";
	
    // puis on y concaténe des chaines de caractéres
	$result .= '<title>'.$titlehead.'</title>'."\n";
	$result .= '<link rel="stylesheet" type="text/css" href="main.css">'."\n";
    $result .= '<script src="../js/jquery-3.3.1.min.js"></script>'."\n";

    // puis on renvoie ça à l'appelant

    return $result;
}

?>

<?php

function getFooter(){

	$result="";

	$result .= '<footer>'."\n";
	$result .= '<h1> voici le footer de ma page </h1>'."\n";
	$result .= '</footer>'."\n";

	return $result;

}

?>

<?php

function getHeader(){

	$Liste_Menu_Content = array("Mon Accueil","Nouveauté", "Nos Produits", "Contacts", "Panier");
	$Liste_Menu_Links = array("index.php","index.php","produits.php","index.php","index.php");

	$result="";

	$result .= '<header>'."\n";
	$result .=	'<nav>'."\n";
 
	for ($i=0; $i <count($Liste_Menu_Content) ; $i++) { 
		echo "<button>".$Liste_Menu_Content[$i]."</button>\n";
		}
	$result.='</nav>'."\n";
	$result.='</header>'."\n";

	return $result;
}

?>