<?php
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use App\library\services\Vehicle;
use App\library\services\Car;
  
class CarController extends Controller
{
  public $vehicle;

  public function __construct(Vehicle $vehicle){
    $this->vehicle = $vehicle;
  }

  public function index()
  {
      $this->vehicle->run();
  }
}