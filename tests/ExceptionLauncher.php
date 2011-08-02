<?php
//Vos classes de tests se situent dans un namespace dédié
namespace tests\units;

//Inclusion de la classe à tester
require_once __DIR__.'/../classes/ExceptionLauncher.class.php';

//Inclusion de Atoum dans toutes les classes de tests
require_once __DIR__.'/atoum/mageekguy.atoum.phar';

use \mageekguy\atoum;

class ExceptionLauncher extends atoum\test
{
    public function testLaunchException ()
    {
        $exception = new ExceptionLauncher();
        $this->assert
                 ->exception(function()use($exception){$exception->launchException();})
                 ->isInstanceOf('LaunchedException')
                 ->hasMessage('Message in the exception');
    }
}