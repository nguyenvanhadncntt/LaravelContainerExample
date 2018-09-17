<?php
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use App\library\services\BindingPrimitive;
  
class PrimitiveController extends Controller
{
    public function index(BindingPrimitive $primitive)
    {
        echo $primitive->getInteger();
    }
}