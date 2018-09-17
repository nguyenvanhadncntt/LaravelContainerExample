<?php
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use App\library\services\BindingPrimitive;
  
class TagController extends Controller
{
    public function index()
    {
        $tag = resolve('tagged');
        $tag->showTagName();
    }
}