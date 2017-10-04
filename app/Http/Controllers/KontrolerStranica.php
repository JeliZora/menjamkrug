<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontrolerStranica extends Controller
{
   public function prikazistr($b)
   {
	   
		if($b=="uputstvo"){return view('stranice/'.$b);}
		if($b=="pravilaponasanja"){return view('stranice/'.$b);}  
        //return view('stranice.uputstvo');
    }


}
