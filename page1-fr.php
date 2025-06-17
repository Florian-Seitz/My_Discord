<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data-equipe-fr.php');
include('include/data-fr.php');

echo $twig->render('categorie1.twig', [
    'titre' => 'Equipes', /*titre de l'onglet*/
    'categories' => $categorieEquipe,
    'texte' => $page1,
    'style' => $style[1],
    'lang' => 'fr',
    'langpage' => [
        'page1-fr',
        'page1-en'
    ]
]);
