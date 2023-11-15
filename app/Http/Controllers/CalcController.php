<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
   public function sum($x , $y)
   {
    $z = $x + $y ;
    return "$x + $y = $z";
   }

   public function sub($x , $y)
   {
    $z = $x - $y ;
    return "$x - $y = $z";
   }

   public function milti($x , $y)
   {
    $z = $x * $y ;
    return "$x * $y = $z";
   }

   public function div($x , $y)
   {
    $z = $x / $y ;
    return "$x / $y = $z";
   }

}
