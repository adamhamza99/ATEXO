# ATEXO - GAME CARD 

[![forthebadge](http://forthebadge.com/images/badges/built-with-love.svg)](http://forthebadge.com) 

## Installation : 

### Lancez le projet

``php bin/console server:run``

### Lancez le test unitaire

``cd tests``

``phpunit ArrayTest.php ``

## Enoncé : 

On souhaite développer un jeu de cartes.

Dans ce jeu, un joueur tire une main de 10 cartes de manière aléatoire.

Chaque carte possède une couleur ("Carreaux", par exemple) et une valeur ("10", par exemple).
On vous demande de:

Construire un ordre aléatoire des couleurs. L'ordre des couleurs est, par exemple, l'un des suivants :

--> Carreaux, Coeur, Pique, Trèfle

Construire un ordre aléatoire des valeurs. L'ordre des valeurs est, par exemple, l'un des suivants :

--> AS, 5, 10, 8, 6, 5, 7, 4, 2, 3, 9, Dame, Roi, Valet

Construire une main de 10 cartes de manière aléatoire.

Présenter la main "non triée" à l'écran puis la main triée selon n'importe quel ordre défini dans la 1ère et 2ème étape. C'est-à-dire que vous devez classer les cartes par couleur et valeur.


## Fabriqué avec

* [PHP](http://php.net) - v7.4.28 
* [Symfony](https://symfony.com/) - v5.4.1
* [Php Unit](https://phpunit.de/) -v9.5.17
