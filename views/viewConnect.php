<?php
ob_start();
$title = 'Deskad | Connexion';
?>

<section id="connect">
    <h1>Connexion</h1>
</section>

<?php
$content = ob_get_clean();
require('views/template.php');
?>