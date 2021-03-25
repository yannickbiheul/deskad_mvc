<?php
ob_start();
$title = 'Deskad | Accueil';
?>

<section id="home">
    <h1>DESKAD</h1>
    <p>Blog d'un développeur web débutant</p>
    <a href="index.php?action=connect">Connexion</a>
</section>

<?php
$content = ob_get_clean();
require('views/template.php');
?>