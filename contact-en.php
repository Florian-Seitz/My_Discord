<?php

use function PHPSTORM_META\type;

include('include/twig.php');
$twig = init_twig();

include('include/data-en.php');

echo $twig->render('contact.twig', [
    'titre' => 'Contact', /*titre de l'onglet*/
    'texte' => $contact,
    'style' => $style[5],
    'lang' => 'en',
    'langpage' => [
        'contact-fr',
        'contact-en'
    ]
]);
