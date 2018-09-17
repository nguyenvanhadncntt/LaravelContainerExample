<?php
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use App\library\services\Test;
  
class InstanceController extends Controller
{
    public function index()
    {
        $ponterFirst = resolve('instance');
        $pointerSecond = resolve('instance');
        echo $ponterFirst->name;
        echo nl2br($pointerSecond->name);

        $ponterFirst->name = "pointer first INSTANCE \r\n";
        $pointerSecond->name = "pointer second INSTANCE \r\n";
        echo $ponterFirst->name;
        echo nl2br($pointerSecond->name);
    }
}