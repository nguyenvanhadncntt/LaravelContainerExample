<?php
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use App\library\services\Vehicle;
use App\library\services\Car;
  
class IntefaceToImplement extends Controller
{
    public function index(Vehicle $vehicle)
    {
        $vehicle->run();
    }
}