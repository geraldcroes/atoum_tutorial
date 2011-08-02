<?php
class BasicTypes
{
    private static $_sharedInstance = false;
    public function getOne (){return 1;}
    public function getTrue(){return true;}
    public function getFalse(){return false;}
    public function getHello(){return 'hello';}
    public function create(){return new BasicTypes();}
    public function getFloat(){return 1.1;}
    public function getNull(){return null;}
    public function getEmptyArray(){return array();}
    public function getArraySizeOf3(){return range(0,2,1);}
}