<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-fr.php');

echo $twig->render('propos.twig', [
    'titre' => 'A propos', /*titre de l'onglet*/
    'texte' => $propos,
    'style' => $style[4],
    'lang' => 'fr',
    'langpage' => [
        'propos-fr',
        'propos-en'
    ]
]);
