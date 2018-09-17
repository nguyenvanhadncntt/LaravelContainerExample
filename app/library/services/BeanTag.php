<?php
namespace App\library\services;
use App\library\services\Vehicle;

class BeanTag {
  public $tag;
  public function __construct($tag){
    $this->tag = $tag;
  }
  public function showTagName(){
    echo $this->tag[0]->name;
    echo $this->tag[1]->name;
  }
}