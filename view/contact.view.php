<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href=<?= $docss_ref?> />
        <title>Contact | Profane</title>

    <body>
        <header>
            <nav class="menu">
                <div id="accueil"> <a href=""><img id="image" src=""></a> </div>
                <ul>
                    <li id="mixtures"><a href="">Nos mixtures</a></li>
                    <li id="histoire"><a href="">Histoire</a></li>
                    <li id="commandes"><a href="">Commandes</a></li>
                    <li id="contacts"><a href="">Contact</a></li>
                </ul>
            </nav>
        </header>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        .contact-form {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group textarea {
            resize: vertical;
            height: 120px;
        }

        .form-group button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #555;
        }
    </style>
</head>
    <h1>Contactez-nous</h1>
    <div class="contact-form">
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </div>

    <footer>
        <footer>
            <div class="footer_div">
               <ul class="ul-footer" id="reseaux">
                   <li class="footer_text"><strong>Nos réseaux</strong></li>
                   <br>
                   <li class="footer_text">
                      <a href="https://www.instagram.com/profane.biere/">Instagram</a>
                   </li>
                   <li class="footer_text">
                       <a href="https://www.youtube.com/channel/UCt2c-oE-VvH9Ii8yd6QCvRg">YouTube</a>
                   </li>
               </ul>
               <ul class="ul-footer" id="mentions">
                   <li class="footer_text"><strong>Mention légales</strong></li>
                   <br>
                   <li class="footer_text">Politique de confidentialité</li>
                   <li class="footer_text">Conditions générales</li>
                   <li class="footer_text">Conditions d'utilisation</li>
                   <li class="footer_text">Mentions légales</li>
               </ul>
               <p class="footer_text" id="avertissement"><strong>L’abus d’alcool est dangeraux pour la 
                   <br>santé.</strong> La consommation d’alcool est interdite
                   <br> aux mineurs et déconseillée aux femmes enceintes.
                   <br>
                   <br>© Tous droits réservés Profane.fr</p>
           </div>
       </footer>
    </footer>
    
</body>
</html>





