<?php

use PHPUnit\Framework\TestCase;

class arrayTest extends TestCase
{
    public function testArray()
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

        $this->assertSame($sortedByline1[0][1], $color_card[0]); // verifie si la couleur de la 1er carte trié est la même que la 1er dans l'étape 1
        $this->assertSame($sortedByline1[9][1], $color_card[3]); // verifie si la couleur de la derniere carte trié et la même que la dernière dans l'etape 1
        $this->assertSame(count($unsortedCard), 10); // verifie si ma main non trié contient bien 10 cartes
        $this->assertSame(count($sortedByline1), 10); // verifie si ma main trié par couleur contient bien 10 cartes
        $this->assertSame(count($sortedByline2), 10); // verifie si ma main trié par valeur etape contient bien 10 cartes
        $this->assertNotEmpty($color_card); // vérifie si le tableau de couleur est bien remplis
    }
}
?>