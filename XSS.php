<?php

  //htmlentities - Convertit tous les caractères éligibles en entités HTML
  //ENT_QUOTES -	Convertit les guillemets doubles et les guillemets simples.
    $pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES);
    echo "Bonjour ".$pseudo." !"

?>
