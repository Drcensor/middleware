<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{


	public function __construct(){

		//$this->middleware('age');
		//$this->middleware('Role');

	}



    public function index(){

		echo "<br>Test Controller.";

		return view('role');
	}



	 public function age(Request $request){

	 	$ages = $request->input('age');

		return view('age', ['ages' => $ages]);
	}
}



