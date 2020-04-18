<?php

namespace App\Http\Controllers;
use App\User;

class MyController extends Controller
{
    
    public function Name()
    {
      $Array=array("Karim"=>"25","Jasim"=>"40");
      return response()->json($Array);
        
    }

   
}
