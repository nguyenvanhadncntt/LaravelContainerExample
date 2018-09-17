<?php
namespace App\library\services;
use App\library\services\Primitive;

class BindingPrimitive{
  private $integer;
  private $string;
  // public function __construct($interger){
  //   $this->integer = $integer;
  // }

  public function getInteger(){
    return $this->integer;
  }

  public function getString(){
    return $this->string;
  }
}