<?php

include('include/twig.php');
$twig = init_twig();

include('include/data-fr.php');

echo $twig->render('contact.twig', [
    'titre' => 'Contact', /*titre de l'onglet*/
    'texte' => $contact,
    'style' => $style[5],
    'lang' => 'fr',
    'langpage' => [
        'contact-fr',
        'contact-en'
    ]
]);
