<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Template</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Un template en scss'>
    <!-- CSS -->
    <link rel='stylesheet' href='assets/css/main.css'>
    <!-- GOOGLE FONTS -->
    <!-- Roboto -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
    <!-- Quicksand -->
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Quicksand&display=swap' rel='stylesheet'>
    <!-- Bangers -->
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Bangers&display=swap' rel='stylesheet'>
    <!-- FONTAWESOME -->
    <script src='https://kit.fontawesome.com/29ef46100e.js' crossorigin='anonymous'></script>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
</head>

<body>

    <header>
        <h1>Deskad</h1>
        <div class="mobileButton">
        </div>
    </header>

    <aside>

        <nav>
            <a href="#">Accueil</a>
            <a href="#">Articles</a>
            <?php
                if (isset($_SESSION['email']) && $_SESSION['email'] == 'yannickbiheul@outlook.fr') {
                    ?>
                        <a href="#">Créer article</a>
                    <?php
                }
            ?>
            <a href="#">À propos</a>
            <a href="#">Contact</a>
            <a href="#">Connexion</a>
        </nav>

        <div class="socials">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>

    </aside>

    <main>
    </main>

    <footer>
        <p>©2021 - Yannick Biheul</p>
    </footer>

    <!-- JAVASCRIPT -->
    <script src='js/main.js'></script>
</body>
</html>