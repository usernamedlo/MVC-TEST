<?php

spl_autoload_register(function ($className) {
    // Préfixe du chemin pour les classes de votre application.
    $prefix = __DIR__ . '/';

    // Remplacez les antislashs par des slashs (important pour les espaces de noms)
    $classFile = str_replace('\\', '/', $className) . '.php';

    // Concaténez le préfixe avec le nom de la classe pour obtenir le chemin complet
    $file = $prefix . $classFile;

    // Si le fichier existe, requérez-le.
    if (file_exists($file)) {
        require $file;
    }
});

?>