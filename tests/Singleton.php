<?php
//Vos classes de tests se situent dans un namespace dédié
namespace tests\units;

//Inclusion de la classe à tester
require_once __DIR__.'/../classes/Singleton.class.php';

//Inclusion de Atoum dans toutes les classes de tests
require_once __DIR__.'/atoum/mageekguy.atoum.phar';

use \mageekguy\atoum;

class Singleton extends atoum\test
{
    public function testGetInstance()
    {
        $this->assert
                ->object(\Singleton::getInstance())
                    ->isInstanceOf('Singleton')
                    ->isIdenticalTo(\Singleton::getInstance());
    }
}