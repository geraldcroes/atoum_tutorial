<?php
//Vos classes de tests se situent dans un namespace dédié
namespace tests\units;

//Inclusion de la classe à tester
require_once __DIR__.'/../classes/BasicTypes.class.php';

//Inclusion de Atoum dans toutes les classes de tests
require_once __DIR__.'/atoum/mageekguy.atoum.phar';

use \mageekguy\atoum;


/**
 * Test de la classe \BasicTypes
 */
class BasicTypes extends atoum\test
{
    public function testBoolean ()
    {
        $bt = new \BasicTypes();
        $this->assert
                ->boolean($bt->getFalse())
                    ->isFalse()//getFalse retourne bien false
                ->boolean($bt->getTrue())
                    ->isTrue();//getTrue retourne bien true
    }

    public function testInteger ()
    {
        $bt = new \BasicTypes();
        $this->assert
                ->integer($bt->getOne())
                ->isEqualTo(1)
                ->isGreaterThan(0);
    }

    public function testString()
    {
        $bt = new \BasicTypes();
        $this->assert
                ->string($bt->getHello())
                ->isNotEmpty()
                ->isEqualTo('hello');
    }

    public function testObject ()
    {
        $bt = new \BasicTypes();
        $this->assert
                ->object($bt->create())
                ->isInstanceOf('BasicTypes')
                ->isNotIdenticalTo($bt);//Une nouvelle instance
    }

    public function testFloat()
    {
        $bt = new \BasicTypes();
        $this->assert
                ->float($bt->getFloat())
                ->isEqualTo(1.1);
    }

    public function testArray()
    {
        $bt = new \BasicTypes();
        $this->assert
                ->phpArray($bt->getArraySizeOf3())
                    ->hasSize(3)
                    ->isNotEmpty()
                ->phpArray($bt->getEmptyArray())
                    ->isEmpty();
    }

    public function testNull ()
    {
        $bt = new \BasicTypes();
        $this->assert
                ->variable($bt->getNull())
                ->isNull();
    }
}