<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	  public function create()
		{
			return view('sessions.create');
		}
	
	public function store()
		{
			//Attempt to authenticate the user
			if(!auth()->attempt(request(['email','password'])))
    		{return back()->withErrors(['message'=>'pokusaj ponovo']);}
    	echo'dobro si se ufurao';
    	return redirect()->home();

			//if not redirect back
			//If so, sign them in 
			//redirect to the home page .

		}
	
	public function destroy()
    {
    auth()->logout();
    return redirect()->home();	
    }

}
