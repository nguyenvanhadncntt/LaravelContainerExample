<?php
namespace App\library\services;
use App\library\services\Vehicle;

class Bicycle implements Vehicle{
  public function run(){
    echo 'The bicycle run...';
  }
}