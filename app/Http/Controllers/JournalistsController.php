<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User_journalist;
use App\Journalist;

class JournalistsController extends Controller
{	
	public function show()
	{	
		$id = Auth::id(); // Arnaque pou récupérer l'id du mec connecté

		//check dans user_journalist quel id_journalist where id_user=$id stocké dans $id_journalist
			// 1 - on cherche avec condition dans la jointure
		$user_journalist_request = User_journalist::where('id_user', $id)->get();

			// 2 - Ici on épluche le tableau (s'aider du dd($user_journalist_request);) afin de trouver la bonne info dans le tableau multidimensionnel
		$id_journalist = $user_journalist_request[0]['id_journalist'];
		
			// 3 - On peut enfin checker dans la table journaliste !
		$journalist = Journalist::find($id_journalist);
		return view('profiles.profile', compact('journalist'));
	}

	public function showUser()//Wildcard
	{
		
		//dd($journalist);
		//Ici on appelle toutes les données de la table journalist, on choisi au détail les infos souhaitées directement en les appelant dans la vue
		

		return view('profiles.profile', compact('journalist'));
	}

	public function edit(Journalist $journalist)
	{
		$journalist = Journalist::find($journalist);
		return view('profiles.edit', compact('journalist'));

	}

	public function create(Journalist $journalist)
	{

		return view('profiles.create', compact('journalist'));

	}



	/*protected function validator(array $data)
    {
        return Create::make($data, [
            'firstname' => 'required|max:255|min:3',
            'lastname' => 'required|max:255|min:3',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            
            
        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'lastname' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }*/


    //
}
