<?php

namespace App\Http\Controllers;
use App\User;

class MyController extends Controller
{
    
    public function Name($name)
    {
      return response($name)
             ->header('name',$name);
    }

   
}
