<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjecteurController extends Controller
{
    public function index(){
        return view('layouts.projecteur');
    }

    /*public function show()
	{
		
		$profile = profile::all();

		return view('profiles.display');
		

		return view('profiles.display', compact('journalist','experience','formation','user'));

	}*/
}
