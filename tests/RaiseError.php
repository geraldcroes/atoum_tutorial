<?php
//Vos classes de tests se situent dans un namespace dédié
namespace tests\units;

//Inclusion de la classe à tester
require_once __DIR__.'/../classes/RaiseError.class.php';

//Inclusion de Atoum dans toutes les classes de tests
require_once __DIR__.'/atoum/mageekguy.atoum.phar';

use \mageekguy\atoum;

class RaiseError extends atoum\test
{
    public function testRaiseError ()
    {
        $error = new \RaiseError();

        $this->assert->object($error);
        $this->assert
                 ->when(function()use($error){
                        $error->raise();
                 })
                 ->error('This is an error', E_USER_WARNING)
                    ->exists();
    }
}