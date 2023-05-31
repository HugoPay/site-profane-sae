<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- <link rel="stylesheet" href="public/css/accueil.css"> -->
        <?php if (isset($css)) : ?>
            <link rel="stylesheet" href="public/css/<?= $css ?>">
        <?php endif ?>
        <title><?= $page_title ?></title>
    </head>

    <body>
    
    <a href="accueil.php"><img id="logo" src="public/images/logo.png"></a>

        <header>
            <nav class="menu">
                <!-- <div id="accueil"> <a href=""><img id="image" src=""></a> </div> -->
                <ul>
                    <li id="mixtures"><a href="beers.php">Nos mixtures</a></li>
                    <!-- <li id="histoire"><a href="">Histoire</a></li> -->
                    <li id="commandes"><a href="formulaire.php">Commandes</a></li>
                    <li id="contacts"><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
