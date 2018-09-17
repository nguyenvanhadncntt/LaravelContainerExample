<?php
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use App\library\services\Vehicle;
use App\library\services\Bicycle;
  
class BicycleController extends Controller
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