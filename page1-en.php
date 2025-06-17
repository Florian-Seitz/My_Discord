<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-equipe-en.php');
include('include/data-en.php');

echo $twig->render('categorie1.twig', [
    'titre' => 'Teams', /*titre de l'onglet*/
    'categories' => $categorieEquipe,
    'texte' => $page1,
    'style' => $style[1],
    'lang' => 'en',
    'langpage' => [
        'page1-fr',
        'page1-en'
    ]
]);
