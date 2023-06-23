    <?php

    // VERIFIER LE PSEUDO

    if (!empty($_POST['pseudo'])) {

        $pseudo = $_POST['pseudo'];

        // SI PSEUDO DIRE 'BONJOUR PSEUDO' SINON 'HELLO UNKNOW USER'

        setcookie('pseudo', $pseudo, time() + 365 * 24 * 3600, null, null, false, true);
    }

    ?>

    <!--FORMULAIRE-->

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <h1>Entrez votre pseudo</h1>

        <form method="post" action="Projet_cookie.php">
            <table>
                <tr>
                    <td>Pseudo</td>
                    <td><input type="text" name="pseudo" id="pseudo"></td>
                </tr>
            </table>

            <button type="submit">Se connecter</button>
        </form>
    </body>
    </html>

    <?php

    if (!empty($_COOKIE['pseudo'])) {

        echo '<h2> Bienvenue ' . htmlspecialchars($_COOKIE['pseudo']) . '<h2>';
    }
    ?>