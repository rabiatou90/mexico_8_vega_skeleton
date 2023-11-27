<?php

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();

// loads .env, .env.local, and .env.$APP_ENV.local or .env.$APP_ENV
//$data = $dotenv->loadEnv(__DIR__.'/../../../.env');
    $dotenv = $dotenv->loadEnv(dirname(__DIR__, 3). '/.env');

    