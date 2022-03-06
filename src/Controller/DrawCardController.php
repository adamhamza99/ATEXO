<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DrawCardController extends AbstractController
{
    /**
     * @Route("/", name="DrawCard")
     */
 
    public function DrawCard(): Response
    {
        /* Step 1 */
        $color_card = array('♦', '♥', '♠', '♣');
        shuffle($color_card);

        /* Step 2 */
        $value_card = array('AS', '5', '10', '8', '6', '7', '4', '2', '3', '9', 'Dame', 'Roi', 'Valet');
        shuffle($value_card);

        /* 3eme consigne */

        /* Sort Random game card */
        $unsortedCard = [];
        for ($x = 0; $x < 10; $x++) {
            $tmp = [$value_card[array_rand($value_card)], $color_card[array_rand($color_card)]];
            if (in_array($tmp, $unsortedCard) == true)
                $x = $x - 1;
            else {
                array_push($unsortedCard, $tmp);
            }
        }

        /* Sort game card by color */
        $sortedByline1 = [];
        for ($i = 0; $i <= 3; $i++) {
            for ($c = 0; $c < 10; $c++) {
                if ($color_card[$i] == $unsortedCard[$c][1]) {
                    array_push($sortedByline1, $unsortedCard[$c]);
                }
            }
        }

        /* ♦ ♥ Sort game card by value ♠ ♣ */
        $sortedByline2 = [];
        for ($i = 0; $i < 13; $i++) {
            for ($c = 0; $c < 10; $c++) {
                if ($value_card[$i] == $unsortedCard[$c][0]) {
                    array_push($sortedByline2, $unsortedCard[$c]);
                }
            }
        }

        return $this->render('draw_card/index.html.twig', [
            'controller_name' => 'DrawCardController',
            'cards' => $color_card,
            'values' => $value_card,
            'notSorted' => $unsortedCard,
            'sortedByColor' => $sortedByline1,
            'sortedByValue' => $sortedByline2,
        ]);
    }
}
?>