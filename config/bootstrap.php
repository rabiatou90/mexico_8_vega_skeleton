<?php

/**
 * ----------------------------
 * Amorçeur de l'application
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

