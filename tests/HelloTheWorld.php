<?php
//Vos classes de tests se situent dans un namespace dédié
namespace tests\units;

//Inclusion de la classe à tester
require_once __DIR__.'/../classes/HelloTheWorld.class.php';

//Inclusion de Atoum dans toutes les classes de tests
require_once __DIR__.'/atoum/mageekguy.atoum.phar';

use \mageekguy\atoum;

/**
 * Test de la classe \HelloTheWorld
 */
class HelloTheWorld extends atoum\test
{
    public function testGetHiBob ()
    {
        //création de l'objet à tester
        $helloToTest = new \HelloTheWorld();

        $this->assert
                    //le retour de la méthode doit être une chaine de caractère
                    ->string($helloToTest->getHiBob())
                    //la chaine doit être égale à Hi Bob !
                    ->isEqualTo('Hi Bob !');
    }
}