<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BirthController extends Controller
{
     public function __construct(){

        $this->middleware('birth');
        
    }

	
    public function index(){
			
		echo "<br>Birth Controller. Im getting the hang of this!!";

		return view('birth');
	}
}
