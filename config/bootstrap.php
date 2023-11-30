<?php

/**
 * ----------------------------
 * Amorceur de l'application
 * Ses roles:
 * 1- charger l'autoloader de composer
 * 2- charger les variables d'environnement
 * 3- charger un conteneur de service
 * 4- charger le loggueur
 * 5- charger le débogueur
 * ----------------------------
 * */ 

// 1- charger l'autoloader de(psr-4) 
require __DIR__ . "/../vendor/autoload.php";

// 2- chargement des variables d'environnement
require __DIR__ . "/packages/environment/dotenv.php";

// 3- chargement du conteneur de service(psr-11)
require __DIR__ . "/packages/di/container.php";

// 4- chargement du loggueur(psr-3)
require __DIR__ . "/packages/logger/monolog.php";

// 5-chargement du débogueur
require __DIR__ . "/packages/error_handler/whoops.php";

// Chargement du moteur de template twig
require __DIR__ . "/packages/twig/twig.php";

