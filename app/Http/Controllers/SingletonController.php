<?php
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use App\library\services\Test;
  
class SingletonController extends Controller
{
    public function index()
    {
        $ponterFirst = resolve('singleton');
        $pointerSecond = resolve('singleton');
        $ponterFirst->name = "pointer first Singleton \r\n";
        $pointerSecond->name = "pointer second Single \r\n";
        echo $ponterFirst->name;
        echo nl2br($pointerSecond->name);
    }
}