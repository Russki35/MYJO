<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journalist;

class JournalistsController extends Controller
{
	public function show()
	{
		return view('profile.profile');
	}

	public function showUser(Journalist $journalist)//Wildcard
	{
		//dd($journalist);
		//Ici on appelle toutes les données de la table journalist, on choisi au détail les infos souhaitées directement en les appelant dans la vue

		return view('profile.profile', compact('journalist'));
	}


    //
}
