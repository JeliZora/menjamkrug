<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
       public function profile(){
    	return view('profile', array('user' => Auth::user()) );
    }
		public function update_slika(Request $request){
			 $this->validate(request(),
            [
			'file'=>'sometimes|image',
            ]);
		
		if($request->hasFile('slika')){
				
			//$user = User::find($id);
				$slika = $request->file('slika');
				$filename = time() . '.' . $slika->getClientOriginalExtension();
				Image::make($slika)->resize(300, 300)->save( public_path('/uploads/' . $filename ) );
				
				$user = Auth::user();
				//brisanje stare slike
				$stara_slika = $user->slika;
			if( $stara_slika=='default.jpg')echo'Izmena profilne slike';
			else Storage::delete($stara_slika);
				//dodavanje u bazu podataka
				$user->slika = $filename;
				$user->save();
			}

			return view('profile', array('user' => Auth::user()) );

		}


}
