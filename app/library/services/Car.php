<?php
namespace App\library\services;
use App\library\services\Vehicle;

class Car implements Vehicle{
  public function run(){
    echo 'The car run...';
  }
}