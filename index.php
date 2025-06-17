<?php
include('include/twig.php');
$twig = init_twig();

include('include/data.php');

foreach ($listeserveurs as &$serveur) {
  if ($serveur[3] == 'select') {
    $serveur[3] = '';
  }
}
$accueiltype = 'select';
unset($serveur);


echo $twig->render('accueil.twig', [
  'titre' => 'Accueil',
  'texte' => $accueil,
  'listeserveurs' => $listeserveurs // Ajout de cette ligne
]);












/*
<?php
    // include('include/header.html');
    include('include/data-compte.php');

      foreach ($comptes as $compte) {
          echo "Nom : " . $compte['nom'] . "<br>";
          echo "<img src=\"images/". $compte['imgprofil']."\" alt=\"\">";
      }
?>



<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Discordo</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="shortcut icon" type="Image/png" href="images/discord-logo.png">
</head>

<body>
  <aside>
    <div class="servlist">
      <nav>
        <a href=""><div></div><img src="images/discord.png" class="mp" height="25" alt="mp"></a>
        <div class="headsepa"></div>
        <a href="EF_discution.html"><div class="sel"></div><img src="images/PhoenixLogo.png" height="25" alt="ef"></a>
        <a href=""><div></div><img src="images/nexusgames.jpg" height="25" alt="rl"></a>
        <a href=""><div></div><img src="images/Noob.png" height="25" alt="mine"></a>
        <a href="F1Com_discution.html"><div class="ping"></div><img src="images/F1FrCommu.webp" height="25" alt="f1"></a>
        <a href=""><div></div><img src="images/RLlogo.jpg" height="25" alt="serveur"></a>
        <a href=""><p></p><img src="images/MineLogo.png" height="25" alt="serveur"></a>
        <a href=""><p></p><img src="images/LogoFortnite.jpeg" height="25" alt="serveur"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/FuzeIIILogo.webp" height="25" alt="fuze"></a>
        <a href=""><p></p><img src="images/Croix0.png" class="sp" height="25" alt="serveur"></a>
        <a href=""><p></p><img src="images/Boussole0.png" class="sp" height="25" alt="serveur"></a>
        <p class="headsepa"></p>
        <a href="MP.html"><p></p><img src="images/Load0.png" class="sp" height="25" alt="serveur"></a>  
      </nav>
      <footer>découvrir</footer>
    </div>
    
    <section>
      <header>header</header>
      <nav>
        salons serveur
      </nav>
      <footer>footer</footer>
    </section>
  </aside>
  <main>
    <?php
    // include('include/header.html');
    include('include/data-compte.php');

      foreach ($comptes as $compte) {
          echo "Nom : " . $compte['nom'] . "<br>";
          echo "<img src=\"images/". $compte['imgprofil']."\" alt=\"\">";
      }
    ?>
  </main>
  */