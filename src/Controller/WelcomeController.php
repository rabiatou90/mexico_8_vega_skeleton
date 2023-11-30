<?php
namespace App\Controller;

use AttributesRouter\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use VegaCore\AbstractController\AbstractController;

    class WelcomeController extends AbstractController
    {
        #[Route('/', name: "app_index", methods:['GET'])]
        public function index(): Response
        {

            $player = "Mario";

            $players = ["Luigi", "Toad", "Daisy", "Bowser"];

            return $this->render('index.html.twig' ,[
                "player" =>$player,
                "players" =>$players
            ]);
        }
    }