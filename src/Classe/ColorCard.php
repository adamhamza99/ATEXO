<?php

namespace App\Classe;

class ColorCard
{
    public function getColor_card()
    {
        $color_card = array('♦', '♥', '♠', '♣');
        shuffle($color_card);
        return $color_card;
    }

    public function getValue_card()
    {
        /* Step 2 */
        $value_card = array('AS', '5', '10', '8', '6', '7', '4', '2', '3', '9', 'Dame', 'Roi', 'Valet');
        shuffle($value_card);

        return $value_card;
    }

    public function getUnsorted_card()
    {
        $value_card = $this->getValue_card();
        $color_card = $this->getColor_card();

        $unsortedCard = [];
        for ($x = 0; $x < 10; $x++) {
            $tmp = [$value_card[array_rand($value_card)], $color_card[array_rand($color_card)]];
            if (in_array($tmp, $unsortedCard) == true)
                $x = $x - 1;
            else {
                array_push($unsortedCard, $tmp);
            }
        }
        return $unsortedCard;
    }

    public function getSortedbyColor()
    {
        $color_card = $this->getColor_card();
        $unsortedCard = $this->getUnsorted_card();

        /* Sort game card by color */
        $sortedByline1 = [];
        for ($i = 0; $i <= 3; $i++) {
            for ($c = 0; $c < 10; $c++) {
                if ($color_card[$i] == $unsortedCard[$c][1]) {
                    array_push($sortedByline1, $unsortedCard[$c]);
                }
            }
        }
        return $sortedByline1;
    }

    public function getSortedbyValue()
    {
        $value_card = $this->getValue_card();
        $unsortedCard = $this->getUnsorted_card();

        /* ♦ ♥ Sort game card by value ♠ ♣ */
        $sortedByline2 = [];
        for ($i = 0; $i < 13; $i++) {
            for ($c = 0; $c < 10; $c++) {
                if ($value_card[$i] == $unsortedCard[$c][0]) {
                    array_push($sortedByline2, $unsortedCard[$c]);
                }
            }
        }
        return $sortedByline2;
    }
}