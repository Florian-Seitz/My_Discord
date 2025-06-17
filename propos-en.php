<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-en.php');

echo $twig->render('propos.twig', [
    'titre' => 'About', /*titre de l'onglet*/
    'texte' => $propos,
    'style' => $style[4],
    'lang' => 'en',
    'langpage' => [
        'propos-fr',
        'propos-en'
    ]
]);
