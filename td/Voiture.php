<?php
/**
 * Created by PhpStorm.
 * User: Arisa
 * Date: 09/10/2018
 * Time: 14:02
 */

namespace td;


use Symfony\Component\DependencyInjection\Container;
use td\Chauffeur;

class Voiture
{
    public function __construct($chauffeur)
    {
        $this->chauffeur = $chauffeur;

        echo "Voiture disponible<br>";
    }

    public function demarre()
    {
       $this->chauffeur->getName();
        echo "voiture start<br>";
    }
}