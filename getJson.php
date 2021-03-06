<?php
/**
 * Pour stocker les informations on utilise un fichier json
 *
 * Pour les récupérer, on le lit avec php, et on affiche les éléments
 *
 */

/* ha, oui, pour voir le résultat , il faut exécuter ce fichier.
 * 2 possibilités:
 *  -  l'ouvrir dans le navigateur comme une page normale, et visualiser le source
 *      http://....../StageAlexy/arraysExamples.php
 *  - ou bien, php getJson.php en ligne de commande.
 */

// on charge le fichier
// --------------------
@$json = file_get_contents("jeux-alexy.json");


// on peut afficher le contenu de ce fichier
// echo $json;
    

// on décode  le json, pour en faire un objet php
// ----------------------------------------------
$listeJeux=json_decode($json, true);
if ($listeJeux == NULL) {
        echo ("Votre page ne peut pas être chargée, veuillez réessayer ultérieurement");   
        exit();
    } 
// on peut afficher l'objet résultant

//isset($listeJeux);
//var_dump($listeJeux);
   // On affiche la liste des jeux 
// ------------------------------
    echo "\n---------- liste des jeux ----------\n";
// C'est à dire que l'on parcourt tout le tableau associatif
// à base de clef/valeur, et on n'affiche que la clef
//
foreach($listeJeux as $key => $value){
     print "  - ".$key  ."\n";
}
//exit();
// On peut montrer le nom d'un jeu en particulier
// ----------------------------------------------
echo "\n---------- le jeu nrd ----------\n";

// C'est à dire que l'on récupére un jeu en particulier avec sa clef
// et on affiche la clef 'nom ' de ce jeu (qui est lui même un tableau associatif)
//
@$lejeuShdwof = $listeJeux["shdwof"];
echo $lejeuShdwof["nom"]."\n";

    if ($lejeuShdwof == NULL) {
        echo "C'est au niveau de la variable \$lejeuShdwof que ça ne marche pas";
    }

// On peut montrer toute la description d'un jeu en particulier
// ------------------------------------------------------------
echo "\n---------- le jeu got ----------\n";


// C'est comme le parcours de la liste des jeux:

// 1- on récupére un jeu en particulier
@$lejeuDkcntry = $listeJeux["dkcntry"];
    if ($lejeuDkcntry == NULL) {
        echo "c'est au niveau de la variable \$lejeuDkcntry que ça ne marche pas";
        exit();
    }
// 2- on parcourt toute la liste associative clef/valeur
//    que  l'on affiche

foreach($lejeuDkcntry as $key => $value)
{
    // 3- Attention, si c'est la clef support que l'on  veut afficher,
    //    comme c'est un tableau
    //    ben on le parcourt avec un foreach également
    

    
    if( $key == "support"){
            echo "supports: ";
        foreach( $value as $support){
            echo "$support ";
        }
        continue;
    }
 
    // 4- sinon, on affiche la clef et sa valeur
    echo $key.": ".$value."\n";
}


// ouf ...

?>
