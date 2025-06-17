<?php
include('include/twig.php');
$twig = init_twig();

include('include/data.php');

foreach ($listeserveurs as &$serveur) {
  if ($serveur[3] == 'select') {
    $serveur[3] = '';
  }
}
$accueiltype = '';
$listeserveurs[1][3] = 'select';
unset($serveur);

echo $twig->render('accueil.twig', [
  'titre' => 'page',
  'texte' => $accueil,
  'listeserveurs' => $listeserveurs,
]);