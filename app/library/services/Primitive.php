<?php
namespace App\library\services;
class Primitive{
  private $integer;
  public function __construct($interger){
    $this->integer = $integer;
  }
  public function getProperties(){
    return $this->integer;
  }
}