<?php

/**
 * -------------------------
 *      Bienvenue sur Véga
 * L'index.php, le controleur frontal.
 * Ses roles:
 * 1- Amorcer l'application(charger les fichiers de configurations)
 * 2- Créer une nouvelle instance du noyau de l'application
 * 3- Récupérer les données de la requete du client
 * 4-Demander au noyau de soumettre la requete du client pour le traitement
 *    5- Récupérer de la part du noyau, la réponse correspondante à la requête
     *      6- Envoyer cette réponse au serveur
     *          * Afin que le serveur l'envoi dans le navigateur du client
     *          * Afin qu'elle soit affichée sur son écran
     * -----------------------------------------------------------------------------------
     */

use App\Kernel;
use Symfony\Component\HttpFoundation\Request;

    //  1- Amorçage de  l'application(charger les fichiers de configurations)
    require __DIR__ . "/../config/bootstrap.php";

    // 2-Créer une nouvelle instance du noyau de l'application
    $kernel = new Kernel($container);

    // 3- Récupérer les données de la requete du client
    $request = Request::createFromGlobals();

    // 4-Demander au noyau de soumettre la requete du client pour le traitement
    // 5- Récupérer de la part du noyau, la réponse correspondante à la requête
    $response = $kernel->handle($request);

    // 6- Envoyer cette réponse au serveur
    // Si le requête du client n'est pas faite via le terminal
    if (php_sapi_name() !="cli") {

        // Envoi lui la réponse
        $response->send();
    }
