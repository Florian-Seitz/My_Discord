<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-evolution-en.php');
include('include/data-en.php');

echo $twig->render('categorie3.twig', [
    'titre' => 'Evolutions', /*titre de l'onglet*/
    'categories' => $categorieEvolution,
    'texte' => $page3,
    'style' => $style[3],
    'lang' => 'en',
    'langpage' => [
        'page3-fr',
        'page3-en'
    ]
]);
