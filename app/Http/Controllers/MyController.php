<?php

namespace App\Http\Controllers;
use App\User;

class MyController extends Controller
{
    
    public function Name($name)
    {
      return "my Name is ".$name;
    }

   
}
