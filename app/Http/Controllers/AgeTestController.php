<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeTestController extends Controller
{
    

	public function __construct(){

		$this->middleware('age');
		

	}


     public function age(Request $request){

	 	$ages = $request->input('age');

		return view('age', ['ages' => $ages]);
	}
}
