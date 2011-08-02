<?php
//Vos classes de tests se situent dans un namespace dédié
namespace tests\units;

//Inclusion de la classe à tester
require_once __DIR__.'/../classes/UsingWriter.class.php';

//Inclusion de Atoum dans toutes les classes de tests
require_once __DIR__.'/atoum/mageekguy.atoum.phar';

use \mageekguy\atoum;

class UsingWriter extends atoum\test
{
    public function testWithMockedInterface ()
    {
        $this->mockGenerator->generate('\IWriter');
        $mockIWriter = new \mock\IWriter;

        $usingWriter = new \UsingWriter();
        $usingWriter->setIWriter($mockIWriter);

        $this->assert
                ->when(function () use($usingWriter) {$usingWriter->write('hello');})
                ->mock($mockIWriter)
                    ->call('write')
                    ->once();
    }

    public function testWithMockedObject ()
    {
        $this->mockGenerator->generate('\Writer');
        $mockWriter = new \mock\Writer;

        $usingWriter = new \UsingWriter();
        $usingWriter->setWriter($mockWriter);

        $this->assert
                ->when(function () use($usingWriter) {$usingWriter->write('hello');})
                ->mock($mockWriter)
                    ->call('write')
                    ->once();
    }

    public function testWithFreeMock()
    {
        $this->mockGenerator->generate('WriterFree');
        $mockWriter = new \mock\WriterFree;
        $mockWriter->getMockController()->write = function($text){};

        $usingWriter = new \UsingWriter();
        $usingWriter->setFreeWriter($mockWriter);

        $this->assert
                ->when(function () use($usingWriter) {$usingWriter->write('hello');})
                ->mock($mockWriter)
                    ->call('write')
                    ->once();
    }

    public function testAdapterOnWriter ()
    {
        
    }
}