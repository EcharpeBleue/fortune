<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FortuneController extends AbstractController
{
    #[Route('/fortune', name: 'app_fortune')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/FortuneController.php',
        ]);
    }
    #[Route('/fortune/message', name:"app_fortune_message")]
    public function message():Response
    {
        // $phrase = "Bonjour la crew!";
        // return $this->render("fortune/message.html.twig",["phrase"=>$phrase]);
        $lesPhrases=["Demain n'oubliez pas le parapluie.","Et merci pour le poisson!","Toujours une serviette de bain tu auras","Attention il y a un cheval dans la salle de bain"];
        return $this->render("fortune/message.html.twig",["phrase"=>$lesPhrases[random_int(0,3)]]);
    }
}
