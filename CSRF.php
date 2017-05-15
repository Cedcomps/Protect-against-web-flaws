<?php

// On démarre la session en début de chaque page
session_start();

//On enregistre notre token
$token = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));

$_SESSION['token'] = $token;

//On vérifie que tous les jetons sont là
if (isset($_SESSION['token']) AND isset($_POST['token']) AND !empty($_SESSION['token']) AND !empty($_POST['token'])) {

    // On vérifie que les deux correspondent
    if ($_SESSION['token'] == $_POST['token']) {

                // Vérification terminée
                // On peut supprimer l'utilisateur

        }
}

else {
    
    // Les token ne correspondent pas
    // On ne supprime pas

    echo "Erreur de vérification";
}


?>

<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8"/>
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
      <link rel="stylesheet" href="test.css" />
     <title>Mon Site</title>
  </head>
  <body>
    <form>
        <!-- Pseudo de la personne à supprimer -->
        <input type="text" name="pseudo" id="pseudo" />
        <input type="submit" value="valider" />
        <!-- Notre token de vérification, bien caché -->
        <input type="hidden" name="token" id="token" value="<?php echo $token; ?>" />
    </form>
  </body>
 </html>
