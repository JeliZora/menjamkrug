<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use Auth;
use Illuminate\Support\Facades\Input;
use Purifier;
use Image;
use Carbon\Carbon;
use App\Category;
use Illuminate\Support\Facades\Storage;


class KontrolerStranica extends Controller
{
   public function prikazistr($b)
   {
	      
       if($b=="uputstvo"){return view('stranice/'.$b);}
		if($b=="pravilaponasanja"){return view('stranice/'.$b);}  
    }


}
