<?php
class Singleton {
   private static $_instance = false;
   private function __construct (){
   }
   private function __clone (){}
   public static function getInstance (){
      if (self::$_instance === false){
         self::$_instance = new Singleton ();
      }
      return self::$_instance;
   }
}