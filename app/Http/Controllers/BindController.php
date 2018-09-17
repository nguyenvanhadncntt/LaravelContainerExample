<?php
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
  
class BindController extends Controller
{
    public function index()
    {
        $bindFirst = resolve('bind');
        $bindSecond = resolve('bind');
        $bindFirst->name = "pointer first bind \r\n";
        $bindSecond->name = "pointer second bind \n";
        echo $bindFirst->name;
        echo $bindSecond->name;
    }
    
}