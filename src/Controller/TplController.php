<?php

namespace App\Controller;

use App\Obj\Entity1;
use App\Obj\Entity2;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TplController extends AbstractController
{
    public function getObjects(): array
    {
        $ret = [];

        $nb1 = 10;
        $nb2 = 10;

        for ($i = 0; $i <= $nb1; $i++) {
            $tags = [];
            for ($j = 0; $j <= $nb2; $j++) {
                $tags[] = new Entity2('tag '.$i.'-'.$j);
            }

            $ret[] = new Entity1('tag '.$i, 'tag'.$i.'@email.com', $tags);
        }

        return $ret;
    }

    #[Route('/tpl', name: 'app_tpl')]
    public function index(): Response
    {
        return $this->render('tpl/index.html.twig', [
            'objects' => $this->getObjects(),
        ]);
    }

    #[Route('/php', name: 'app_php')]
    public function php(): Response
    {
        return $this->render('tpl/index.html.php', [
            'objects' => $this->getObjects(),
        ]);
    }
}
