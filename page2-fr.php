<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-pilote-fr.php');
include('include/data-fr.php');

// Calculer l'âge pour chaque pilote
foreach ($categoriePilote as &$pilote) {
    $dateNaissance = new DateTime($pilote['date']);
    $aujourdhui = new DateTime();
    $pilote['age'] = $aujourdhui->diff($dateNaissance)->y;
}

echo $twig->render('categorie2.twig', [
    'titre' => 'Pilotes', /*titre de l'onglet*/
    'categories' => $categoriePilote,
    'texte' => $page2,
    'style' => $style[2],
    'lang' => 'fr',
    'langpage' => [
        'page2-fr',
        'page2-en'
    ]
]);
