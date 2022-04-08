<?php

namespace App\Controller;

use App\Classe\ColorCard;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DrawCardController extends AbstractController
{
    /**
     * @Route("/", name="DrawCard")
     */
 
    public function DrawCard(ColorCard $colorCard): Response
    {
        return $this->render('draw_card/index.html.twig', [
            'cards' => $colorCard->getColor_card(),
            'values' => $colorCard->getValue_card(),
            'notSorted' => $colorCard->getUnsorted_card(),
            'sortedByColor' => $colorCard->getSortedbyColor(),
            'sortedByValue' => $colorCard->getSortedbyValue()
        ]);
    }
}
?>