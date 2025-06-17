<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-evolution-fr.php');
include('include/data-fr.php');

echo $twig->render('categorie3.twig', [
    'titre' => 'Evolutions', /*titre de l'onglet*/
    'categories' => $categorieEvolution,
    'texte' => $page3,
    'style' => $style[3],
    'lang' => 'fr',
    'langpage' => [
        'page3-fr',
        'page3-en'
    ]
]);
